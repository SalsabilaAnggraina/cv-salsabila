document.addEventListener('DOMContentLoaded', function() {
    const themeOptions = document.querySelectorAll('.theme-option');
    const htmlElement = document.documentElement;
    
    // 1. Ambil tema yang disimpan di Local Storage (jika ada)
    const storedTheme = localStorage.getItem('theme') || 'emerald';
    htmlElement.setAttribute('data-theme', storedTheme);

    // 2. Tambahkan event listener ke setiap opsi tema
    themeOptions.forEach(option => {
        option.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Ambil nama tema dari atribut data
            const selectedTheme = this.getAttribute('data-theme-name');
            
            // Terapkan tema ke elemen <html>
            htmlElement.setAttribute('data-theme', selectedTheme);
            
            // Simpan tema yang dipilih ke Local Storage
            localStorage.setItem('theme', selectedTheme);
            
            // Opsional: Tutup dropdown setelah pemilihan
            const dropdown = document.getElementById('theme-dropdown');
            dropdown.classList.remove('opacity-100', 'visible');
            dropdown.classList.add('opacity-0', 'invisible');
        });
    });
});