# 🚀 E-Raport Aksesibel – Laravel + React + PWA

![GitHub Repo stars](https://img.shields.io/github/stars/Ubaidmasrur/e-raport-accessible?style=social)
![Last Commit](https://img.shields.io/github/last-commit/Ubaidmasrur/e-raport-accessible)
![License](https://img.shields.io/github/license/Ubaidmasrur/e-raport-accessible)
![PWA Ready](https://img.shields.io/badge/PWA-Enabled-3eb991?logo=googlechrome)
![Made with Laravel](https://img.shields.io/badge/Made%20with-Laravel-red)
![React](https://img.shields.io/badge/Frontend-React-blue)

> Sistem E-Raport berbasis Web dengan fitur Inklusif untuk siswa tunadaksa, lengkap dengan login multi-role, PDF laporan, grafik capaian, dan offline-ready (PWA).

## 📦 Fitur Utama

- ✅ Input Nilai Indikator PPI
- ✅ Rekap Nilai PDF
- ✅ Kirim laporan ke email wali
- ✅ Grafik capaian indikator
- ✅ Login multi-role
- ✅ Offline support (PWA)
- ✅ Aksesibilitas: ARIA, keyboard-friendly, dark mode

## 🛠️ Teknologi

| Backend | Frontend | UI & Grafik | Lainnya         |
|---------|----------|-------------|-----------------|
| Laravel | React    | TailwindCSS | Recharts, DomPDF |

## 🚀 Instalasi

### Backend
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

### Frontend
```bash
cd frontend
npm install
npm run dev
```

## 📱 PWA Ready
- Bisa diinstal seperti aplikasi
- Bisa input nilai saat offline
- Auto sync saat online kembali

## 📄 Lisensi
Lihat file LICENSE
