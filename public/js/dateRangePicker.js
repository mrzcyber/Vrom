const MONTH_NAMES = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];
const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

document.addEventListener("alpine:init", () => {
    Alpine.data("app", (bookedData = []) => ({
        bookedRanges: Array.isArray(bookedData) ? bookedData : [],

        showDatepicker: false,
        dateFromYmd: "",
        dateToYmd: "",
        outputDateFromValue: "",
        outputDateToValue: "",
        dateFromValue: "",
        dateToValue: "",
        currentDate: null,
        dateFrom: null,
        dateTo: null,
        endToShow: "",
        selecting: false,
        month: "",
        year: "",
        no_of_days: [],
        blankdays: [],

        convertFromYmd(dateYmd) {
            if (!dateYmd) return null;
            const year = Number(dateYmd.substr(0, 4));
            const month = Number(dateYmd.substr(5, 2)) - 1;
            const date = Number(dateYmd.substr(8, 2));
            return new Date(year, month, date);
        },

        convertToYmd(dateObject) {
            const year = dateObject.getFullYear();
            const month = String(dateObject.getMonth() + 1).padStart(2, "0");
            const date = String(dateObject.getDate()).padStart(2, "0");
            return `${date} ${month} ${year}`;
        },

        init() {
            this.selecting =
                (this.endToShow === "to" && this.dateTo) ||
                (this.endToShow === "from" && this.dateFrom);

            if (!this.dateFrom && this.dateFromYmd)
                this.dateFrom = this.convertFromYmd(this.dateFromYmd);
            if (!this.dateTo && this.dateToYmd)
                this.dateTo = this.convertFromYmd(this.dateToYmd);

            if (!this.dateFrom) this.dateFrom = this.dateTo;
            if (!this.dateTo) this.dateTo = this.dateFrom;

            if (this.endToShow === "from" && this.dateFrom) {
                this.currentDate = this.dateFrom;
            } else if (this.endToShow === "to" && this.dateTo) {
                this.currentDate = this.dateTo;
            } else {
                this.currentDate = new Date();
            }

            this.month = this.currentDate.getMonth();
            this.year = this.currentDate.getFullYear();
            this.getNoOfDays();
            this.setDateValues();
        },

        isToday(date) {
            const today = new Date();
            const d = new Date(this.year, this.month, date);
            return today.toDateString() === d.toDateString();
        },

        isPastDate(date) {
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            const d = new Date(this.year, this.month, date);
            return d < today;
        },

        isBooked(date) {
            if (!this.bookedRanges || !this.bookedRanges.length) return false;
            const y = this.year;
            const m = String(this.month + 1).padStart(2, "0");
            const d = String(date).padStart(2, "0");
            const formatted = `${y}-${m}-${d}`;
            return this.bookedRanges.includes(formatted);
        },

        isDateFrom(date) {
            if (!this.dateFrom) return false;
            const d = new Date(this.year, this.month, date);
            return d.getTime() === this.dateFrom.getTime();
        },

        isDateTo(date) {
            if (!this.dateTo) return false;
            const d = new Date(this.year, this.month, date);
            return d.getTime() === this.dateTo.getTime();
        },

        isInRange(date) {
            if (!this.dateFrom || !this.dateTo) return false;
            const d = new Date(this.year, this.month, date);
            return d > this.dateFrom && d < this.dateTo;
        },

        outputDateValues() {
            if (this.dateFrom) {
                this.outputDateFromValue = this.convertToYmd(this.dateFrom);
                const y = this.dateFrom.getFullYear();
                const m = String(this.dateFrom.getMonth() + 1).padStart(2, "0");
                const d = String(this.dateFrom.getDate()).padStart(2, "0");
                this.dateFromYmd = `${y}-${m}-${d}`;
            }
            if (this.dateTo) {
                this.outputDateToValue = this.convertToYmd(this.dateTo);
                const y = this.dateTo.getFullYear();
                const m = String(this.dateTo.getMonth() + 1).padStart(2, "0");
                const d = String(this.dateTo.getDate()).padStart(2, "0");
                this.dateToYmd = `${y}-${m}-${d}`;
            }
        },

        setDateValues() {
            if (this.dateFrom)
                this.dateFromValue = this.dateFrom.toDateString();
            if (this.dateTo) this.dateToValue = this.dateTo.toDateString();
        },

     getDateValue(date, temp) {
    if (this.isPastDate(date) || this.isBooked(date)) return;
    if (temp && !this.selecting) return;

    let selectedDate = new Date(this.year, this.month, date);
    selectedDate.setHours(0, 0, 0, 0);

    // [TAMBAH INI] Cek apakah range melewati booked date
    if (this.selecting && !temp) {
        let rangeStart = this.endToShow === 'to' ? this.dateFrom : selectedDate;
        let rangeEnd = this.endToShow === 'to' ? selectedDate : this.dateTo;

        if (rangeStart && rangeEnd) {
            let current = new Date(rangeStart);
            while (current <= rangeEnd) {
                const y = current.getFullYear();
                const m = String(current.getMonth() + 1).padStart(2, '0');
                const d = String(current.getDate()).padStart(2, '0');
                if (this.bookedRanges.includes(`${y}-${m}-${d}`)) {
                    alert("Rentang tanggal melewati jadwal yang sudah dibooking!");
                    return;
                }
                current.setDate(current.getDate() + 1);
            }
        }
    }
    // [SAMPAI SINI]

    if (this.endToShow === "from") {
        this.dateFrom = selectedDate;
        if (!this.dateTo) this.dateTo = selectedDate;
        else if (selectedDate > this.dateTo) {
            this.endToShow = "to";
            this.dateFrom = this.dateTo;
            this.dateTo = selectedDate;
        }
    } else if (this.endToShow === "to") {
        this.dateTo = selectedDate;
        if (!this.dateFrom) this.dateFrom = selectedDate;
        else if (selectedDate < this.dateFrom) {
            this.endToShow = "from";
            this.dateTo = this.dateFrom;
            this.dateFrom = selectedDate;
        }
    }

    this.setDateValues();

    if (!temp) {
        if (this.selecting) {
            this.outputDateValues();
            this.closeDatepicker();
        }
        this.selecting = !this.selecting;
    }
},

        getNoOfDays() {
            let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
            let dayOfWeek = new Date(this.year, this.month).getDay();
            let blankdaysArray = [];
            for (var i = 1; i <= dayOfWeek; i++) {
                blankdaysArray.push(i);
            }
            let daysArray = [];
            for (var i = 1; i <= daysInMonth; i++) {
                daysArray.push(i);
            }
            this.blankdays = blankdaysArray;
            this.no_of_days = daysArray;
        },

        closeDatepicker() {
            this.endToShow = "";
            this.showDatepicker = false;
        },
    }));
});
