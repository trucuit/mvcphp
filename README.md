# MVC PHP

Framework MVC PHP cơ bản — boilerplate cho các dự án PHP theo mô hình Model-View-Controller.

## 📋 Tính năng

- Kiến trúc MVC rõ ràng
- Routing tự động theo module/controller/action
- Kết nối MySQL qua PDO
- Template engine đơn giản

## 🛠️ Công nghệ

- **Backend:** PHP (MVC pattern)
- **Database:** MySQL

## ⚙️ Cài đặt

### 1. Clone repository

```bash
git clone https://github.com/trucuit/mvcphp.git
cd mvcphp
```

### 2. Tạo database

```sql
CREATE DATABASE test;
```

### 3. Cấu hình Environment

Thiết lập biến môi trường trước khi chạy:

| Biến | Mô tả | Mặc định |
|------|--------|----------|
| `DB_HOST` | MySQL host | `localhost` |
| `DB_USER` | MySQL username | `root` |
| `DB_PASS` | MySQL password | _(empty)_ |
| `DB_NAME` | Tên database | `test` |

### 4. Chạy ứng dụng

Deploy lên Apache/Nginx web server với PHP enabled.

## 📁 Cấu trúc thư mục

```
mvcphp/
├── application/     # Controllers, Models, Views
├── libs/            # Core framework libraries
├── public/          # Static assets & templates
├── define.php       # Configuration (uses env vars)
└── index.php        # Entry point
```

## 🔒 Bảo mật

> **⚠️ QUAN TRỌNG:** Không commit credentials vào source code. Sử dụng biến môi trường.

## 📄 License

All rights reserved.
