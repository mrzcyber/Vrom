const imageInput   = document.getElementById('imageInput');
const imagePreview = document.getElementById('imagePreview');
const imageError   = document.getElementById('imageError');

const MAX_IMAGES = 4;

let selectedFiles = [];

imageInput.addEventListener('change', function () {
    const incoming = Array.from(this.files);
    imageError.classList.add('hidden');

    incoming.forEach(file => {
        if (selectedFiles.length >= MAX_IMAGES) {
            imageError.classList.remove('hidden');
            return;
        }
        const isDuplicate = selectedFiles.some(f => f.name === file.name && f.size === file.size);
        if (!isDuplicate) selectedFiles.push(file);
    });

    this.value = '';
    renderPreviews();
});

function renderPreviews() {
    imagePreview.innerHTML = '';

    if (selectedFiles.length === 0) {
        imagePreview.classList.add('hidden');
        return;
    }

    imagePreview.classList.remove('hidden');

    selectedFiles.forEach((file, index) => {
        const url = URL.createObjectURL(file);

        const wrapper = document.createElement('div');
        wrapper.className = 'relative rounded-xl overflow-hidden border border-gray-200 aspect-square bg-gray-100';

        const img = document.createElement('img');
        img.src = url;
        img.className = 'w-full h-full object-cover';
        img.onload = () => URL.revokeObjectURL(url);

        if (index === 0) {
            const badge = document.createElement('div');
            badge.className = 'absolute bottom-1.5 left-1.5 bg-indigo-600 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full';
            badge.textContent = 'Thumbnail';
            wrapper.appendChild(badge);
        }

        wrapper.appendChild(img);
        imagePreview.appendChild(wrapper);
    });
}

document.getElementById('itemForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const dt = new DataTransfer();
    selectedFiles.forEach(file => dt.items.add(file));
    imageInput.files = dt.files;

    this.submit();
});