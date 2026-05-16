
// inpot form
const imageInput  = document.getElementById('imageInput');
const imagePreview = document.getElementById('imagePreview');
const imageError   = document.getElementById('imageError');

const MAX_IMAGES = 4;

// Track files in the order user adds them
let selectedFiles = [];

imageInput.addEventListener('change', function () {
    const incoming = Array.from(this.files);
    imageError.classList.add('hidden');

    incoming.forEach(file => {
        if (selectedFiles.length >= MAX_IMAGES) {
            imageError.classList.remove('hidden');
            return;
        }
        // Avoid duplicate by name+size
        const isDuplicate = selectedFiles.some(f => f.name === file.name && f.size === file.size);
        if (!isDuplicate) selectedFiles.push(file);
    });

    // Reset input so user can pick again
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

        // Thumbnail badge — hanya gambar pertama di array selectedFiles
        if (index === 0) {
            const badge = document.createElement('div');
            badge.className = 'absolute bottom-1.5 left-1.5 bg-indigo-600 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full';
            badge.textContent = 'Thumbnail';
            wrapper.appendChild(badge);
        }

        // Remove button
        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'absolute top-1.5 right-1.5 w-6 h-6 flex items-center justify-center bg-white/80 hover:bg-red-50 text-gray-500 hover:text-red-400 rounded-full shadow transition';
        removeBtn.innerHTML = `<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>`;
        removeBtn.addEventListener('click', () => {
            selectedFiles.splice(index, 1);
            imageError.classList.add('hidden');
            renderPreviews();
        });

        wrapper.appendChild(img);
        wrapper.appendChild(removeBtn);
        imagePreview.appendChild(wrapper);
    });
}