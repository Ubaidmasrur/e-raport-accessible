
# E-Raport Berbasis Laravel + React

Sistem E-Raport Inklusif untuk SMA Muhammadiyah 10 Surabaya.
Fitur:
- Input nilai indikator PPI siswa tunadaksa
- Rekap semester dan tahunan
- Kirim PDF ke wali, grafik capaian
- Offline mode, PWA, login multi-role

## Instalasi Backend (Laravel)
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

## Instalasi Frontend (React)
cd frontend
npm install
npm run dev
