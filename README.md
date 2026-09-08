# DocuMatrix AI: Document Field Extractor

[![GitHub License](https://img.shields.io/github/license/smit-backend/laravel-docu-extract-ai?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/laravel-docu-extract-ai?style=flat-square)](https://github.com/smit-backend/laravel-docu-extract-ai/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/laravel-docu-extract-ai?style=flat-square)](https://github.com/smit-backend/laravel-docu-extract-ai/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **Extract unstructured layout fields from PDF and image uploads into strongly typed PHP DTOs using Claude & OpenAI.**

---

## 🚀 Key Highlights & Features

- **Production-Ready Architecture:** Designed specifically with clean, decoupled architecture.
- **Enterprise Resiliency:** Built-in safeguards, structured error reporting, and observability.
- **Zero-Friction Setup:** Configurable via sensible defaults or deep environment customization.
- **Strictly Typed:** Complete type declarations compatible with PHP 8.2+ and modern standards.

---

## 🛠️ Architecture & Flow

```mermaid
graph TD
    Client[Incoming Request / Event] --> Gate[Input Validator & Security Guard]
    Gate --> CoreEngine[DocuMatrix AI: Document Field Extractor]
    CoreEngine --> Adapter[External Storage / Cloud / DB]
    CoreEngine --> Observer[Metrics & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2`
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/laravel-docu-extract-ai
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="laravel-docu-extract-ai-config"
```

Sample configuration excerpt (`config/laravel-docu-extract-ai.php`):
```php
return [
    'enabled' => env('LARAVEL_DOCU_EXTRACT_AI_ENABLED', true),
    'log_channel' => env('LARAVEL_DOCU_EXTRACT_AI_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.
