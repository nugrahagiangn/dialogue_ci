<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-05-15 09:46:56 --> Config Class Initialized
INFO - 2025-05-15 09:46:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:46:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:46:56 --> Utf8 Class Initialized
INFO - 2025-05-15 09:46:56 --> URI Class Initialized
INFO - 2025-05-15 09:46:56 --> Router Class Initialized
INFO - 2025-05-15 09:46:56 --> Output Class Initialized
INFO - 2025-05-15 09:46:56 --> Security Class Initialized
DEBUG - 2025-05-15 09:46:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:46:56 --> Input Class Initialized
INFO - 2025-05-15 09:46:56 --> Language Class Initialized
INFO - 2025-05-15 09:46:56 --> Loader Class Initialized
INFO - 2025-05-15 09:46:56 --> Helper loaded: url_helper
INFO - 2025-05-15 09:46:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:46:56 --> Helper loaded: form_helper
INFO - 2025-05-15 09:46:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:46:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:46:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:46:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:46:56 --> Form Validation Class Initialized
INFO - 2025-05-15 09:46:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:46:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:46:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:46:56 --> Controller Class Initialized
INFO - 2025-05-15 09:46:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:46:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:46:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:46:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:46:56 --> Final output sent to browser
DEBUG - 2025-05-15 09:46:56 --> Total execution time: 0.0098
INFO - 2025-05-15 09:46:57 --> Config Class Initialized
INFO - 2025-05-15 09:46:57 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:46:57 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:46:57 --> Utf8 Class Initialized
INFO - 2025-05-15 09:46:57 --> URI Class Initialized
INFO - 2025-05-15 09:46:57 --> Router Class Initialized
INFO - 2025-05-15 09:46:57 --> Output Class Initialized
INFO - 2025-05-15 09:46:57 --> Security Class Initialized
DEBUG - 2025-05-15 09:46:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:46:57 --> Input Class Initialized
INFO - 2025-05-15 09:46:57 --> Language Class Initialized
INFO - 2025-05-15 09:46:57 --> Loader Class Initialized
INFO - 2025-05-15 09:46:57 --> Helper loaded: url_helper
INFO - 2025-05-15 09:46:57 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:46:57 --> Helper loaded: form_helper
INFO - 2025-05-15 09:46:57 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:46:57 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:46:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:46:58 --> Form Validation Class Initialized
INFO - 2025-05-15 09:46:58 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:46:58 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:46:58 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:46:58 --> Controller Class Initialized
DEBUG - 2025-05-15 09:46:58 --> Export Detail: min_date=06-03-2025 | max_date=01-05-2025
DEBUG - 2025-05-15 09:46:58 --> Converted: min_date_db=2025-03-06 | max_date_db=2025-05-01
DEBUG - 2025-05-15 09:46:58 --> 
DEBUG - 2025-05-15 09:46:58 --> SELECT "t"."id_transaksi", "t"."tanggal", "t"."keterangan", "t"."total_bayar", "p"."nama" as "nama_pembeli", "b"."nama" as "nama_barang", "dt"."jumlah", "dt"."total" as "subtotal", "dt"."disc_rp", "dt"."disc_persen"
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN "detail_transaksi" "dt" ON "dt"."transaksi_id" = "t"."id_transaksi"
JOIN "barang" "b" ON "dt"."barang_id" = "b"."id"
WHERE "t"."tanggal" >= '2025-03-06'
AND "t"."tanggal" <= '2025-05-01'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 09:49:17 --> Config Class Initialized
INFO - 2025-05-15 09:49:17 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:49:17 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:49:17 --> Utf8 Class Initialized
INFO - 2025-05-15 09:49:17 --> URI Class Initialized
INFO - 2025-05-15 09:49:17 --> Router Class Initialized
INFO - 2025-05-15 09:49:17 --> Output Class Initialized
INFO - 2025-05-15 09:49:17 --> Security Class Initialized
DEBUG - 2025-05-15 09:49:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:49:17 --> Input Class Initialized
INFO - 2025-05-15 09:49:17 --> Language Class Initialized
INFO - 2025-05-15 09:49:17 --> Loader Class Initialized
INFO - 2025-05-15 09:49:17 --> Helper loaded: url_helper
INFO - 2025-05-15 09:49:17 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:49:17 --> Helper loaded: form_helper
INFO - 2025-05-15 09:49:17 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:49:17 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:49:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:49:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:49:17 --> Form Validation Class Initialized
INFO - 2025-05-15 09:49:17 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:49:17 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:49:17 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:49:17 --> Controller Class Initialized
INFO - 2025-05-15 09:49:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:49:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:49:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:49:17 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:49:17 --> Final output sent to browser
DEBUG - 2025-05-15 09:49:17 --> Total execution time: 0.0122
INFO - 2025-05-15 09:55:48 --> Config Class Initialized
INFO - 2025-05-15 09:55:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:55:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:55:48 --> Utf8 Class Initialized
INFO - 2025-05-15 09:55:48 --> URI Class Initialized
INFO - 2025-05-15 09:55:48 --> Router Class Initialized
INFO - 2025-05-15 09:55:48 --> Output Class Initialized
INFO - 2025-05-15 09:55:48 --> Security Class Initialized
DEBUG - 2025-05-15 09:55:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:55:48 --> Input Class Initialized
INFO - 2025-05-15 09:55:48 --> Language Class Initialized
INFO - 2025-05-15 09:55:48 --> Loader Class Initialized
INFO - 2025-05-15 09:55:48 --> Helper loaded: url_helper
INFO - 2025-05-15 09:55:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:55:48 --> Helper loaded: form_helper
INFO - 2025-05-15 09:55:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:55:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:55:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:55:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:55:48 --> Form Validation Class Initialized
INFO - 2025-05-15 09:55:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:55:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:55:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:55:48 --> Controller Class Initialized
INFO - 2025-05-15 09:55:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:55:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:55:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:55:48 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:55:48 --> Final output sent to browser
DEBUG - 2025-05-15 09:55:48 --> Total execution time: 0.0104
INFO - 2025-05-15 09:55:50 --> Config Class Initialized
INFO - 2025-05-15 09:55:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:55:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:55:50 --> Utf8 Class Initialized
INFO - 2025-05-15 09:55:50 --> URI Class Initialized
INFO - 2025-05-15 09:55:50 --> Router Class Initialized
INFO - 2025-05-15 09:55:50 --> Output Class Initialized
INFO - 2025-05-15 09:55:50 --> Security Class Initialized
DEBUG - 2025-05-15 09:55:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:55:50 --> Input Class Initialized
INFO - 2025-05-15 09:55:50 --> Language Class Initialized
INFO - 2025-05-15 09:55:50 --> Loader Class Initialized
INFO - 2025-05-15 09:55:50 --> Helper loaded: url_helper
INFO - 2025-05-15 09:55:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:55:50 --> Helper loaded: form_helper
INFO - 2025-05-15 09:55:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:55:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:55:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:55:50 --> Form Validation Class Initialized
INFO - 2025-05-15 09:55:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:55:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:55:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:55:50 --> Controller Class Initialized
DEBUG - 2025-05-15 09:55:50 --> Export Detail: min_date=06-03-2025 | max_date=01-05-2025
DEBUG - 2025-05-15 09:55:50 --> Converted: min_date_db=2025-03-06 | max_date_db=2025-05-01
DEBUG - 2025-05-15 09:55:50 --> 
DEBUG - 2025-05-15 09:55:50 --> SELECT "t"."id_transaksi", "t"."tanggal", "t"."keterangan", "t"."total_bayar", "p"."nama" as "nama_pembeli", "b"."nama" as "nama_barang", "dt"."jumlah", "dt"."total" as "subtotal", "dt"."disc_rp", "dt"."disc_persen"
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN "detail_transaksi" "dt" ON "dt"."transaksi_id" = "t"."id_transaksi"
JOIN "barang" "b" ON "dt"."barang_id" = "b"."id"
WHERE "t"."tanggal" >= '2025-03-06 00:00:00'
AND "t"."tanggal" <= '2025-05-01 23:59:59'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 09:57:36 --> Config Class Initialized
INFO - 2025-05-15 09:57:36 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:57:36 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:57:36 --> Utf8 Class Initialized
INFO - 2025-05-15 09:57:36 --> URI Class Initialized
INFO - 2025-05-15 09:57:36 --> Router Class Initialized
INFO - 2025-05-15 09:57:36 --> Output Class Initialized
INFO - 2025-05-15 09:57:36 --> Security Class Initialized
DEBUG - 2025-05-15 09:57:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:57:36 --> Input Class Initialized
INFO - 2025-05-15 09:57:36 --> Language Class Initialized
INFO - 2025-05-15 09:57:36 --> Loader Class Initialized
INFO - 2025-05-15 09:57:36 --> Helper loaded: url_helper
INFO - 2025-05-15 09:57:36 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:57:36 --> Helper loaded: form_helper
INFO - 2025-05-15 09:57:36 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:57:36 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:57:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:57:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:57:36 --> Form Validation Class Initialized
INFO - 2025-05-15 09:57:36 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:57:36 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:57:36 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:57:36 --> Controller Class Initialized
INFO - 2025-05-15 09:57:36 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:57:36 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:57:36 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:57:36 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:57:36 --> Final output sent to browser
DEBUG - 2025-05-15 09:57:36 --> Total execution time: 0.0203
INFO - 2025-05-15 09:57:37 --> Config Class Initialized
INFO - 2025-05-15 09:57:37 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:57:37 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:57:37 --> Utf8 Class Initialized
INFO - 2025-05-15 09:57:37 --> URI Class Initialized
INFO - 2025-05-15 09:57:37 --> Router Class Initialized
INFO - 2025-05-15 09:57:37 --> Output Class Initialized
INFO - 2025-05-15 09:57:37 --> Security Class Initialized
DEBUG - 2025-05-15 09:57:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:57:37 --> Input Class Initialized
INFO - 2025-05-15 09:57:37 --> Language Class Initialized
INFO - 2025-05-15 09:57:37 --> Loader Class Initialized
INFO - 2025-05-15 09:57:37 --> Helper loaded: url_helper
INFO - 2025-05-15 09:57:37 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:57:37 --> Helper loaded: form_helper
INFO - 2025-05-15 09:57:37 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:57:37 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:57:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:57:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:57:37 --> Form Validation Class Initialized
INFO - 2025-05-15 09:57:37 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:57:37 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:57:37 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:57:37 --> Controller Class Initialized
INFO - 2025-05-15 09:57:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:57:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:57:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:57:37 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:57:37 --> Final output sent to browser
DEBUG - 2025-05-15 09:57:37 --> Total execution time: 0.0209
INFO - 2025-05-15 09:57:37 --> Config Class Initialized
INFO - 2025-05-15 09:57:37 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:57:37 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:57:37 --> Utf8 Class Initialized
INFO - 2025-05-15 09:57:37 --> URI Class Initialized
INFO - 2025-05-15 09:57:37 --> Router Class Initialized
INFO - 2025-05-15 09:57:37 --> Output Class Initialized
INFO - 2025-05-15 09:57:37 --> Security Class Initialized
DEBUG - 2025-05-15 09:57:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:57:37 --> Input Class Initialized
INFO - 2025-05-15 09:57:37 --> Language Class Initialized
INFO - 2025-05-15 09:57:37 --> Loader Class Initialized
INFO - 2025-05-15 09:57:37 --> Helper loaded: url_helper
INFO - 2025-05-15 09:57:37 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:57:37 --> Helper loaded: form_helper
INFO - 2025-05-15 09:57:37 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:57:37 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:57:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:57:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:57:37 --> Form Validation Class Initialized
INFO - 2025-05-15 09:57:37 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:57:37 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:57:37 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:57:37 --> Controller Class Initialized
INFO - 2025-05-15 09:57:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/barang/index.php
INFO - 2025-05-15 09:57:38 --> Final output sent to browser
DEBUG - 2025-05-15 09:57:38 --> Total execution time: 0.0407
INFO - 2025-05-15 09:57:38 --> Config Class Initialized
INFO - 2025-05-15 09:57:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:57:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:57:38 --> Utf8 Class Initialized
INFO - 2025-05-15 09:57:38 --> URI Class Initialized
INFO - 2025-05-15 09:57:38 --> Router Class Initialized
INFO - 2025-05-15 09:57:38 --> Output Class Initialized
INFO - 2025-05-15 09:57:38 --> Security Class Initialized
DEBUG - 2025-05-15 09:57:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:57:38 --> Input Class Initialized
INFO - 2025-05-15 09:57:38 --> Language Class Initialized
INFO - 2025-05-15 09:57:38 --> Loader Class Initialized
INFO - 2025-05-15 09:57:38 --> Helper loaded: url_helper
INFO - 2025-05-15 09:57:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:57:38 --> Helper loaded: form_helper
INFO - 2025-05-15 09:57:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:57:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:57:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:57:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:57:38 --> Form Validation Class Initialized
INFO - 2025-05-15 09:57:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:57:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:57:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:57:38 --> Controller Class Initialized
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:57:38 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:57:38 --> Final output sent to browser
DEBUG - 2025-05-15 09:57:38 --> Total execution time: 0.0093
INFO - 2025-05-15 09:57:50 --> Config Class Initialized
INFO - 2025-05-15 09:57:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 09:57:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 09:57:50 --> Utf8 Class Initialized
INFO - 2025-05-15 09:57:50 --> URI Class Initialized
INFO - 2025-05-15 09:57:50 --> Router Class Initialized
INFO - 2025-05-15 09:57:50 --> Output Class Initialized
INFO - 2025-05-15 09:57:50 --> Security Class Initialized
DEBUG - 2025-05-15 09:57:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 09:57:50 --> Input Class Initialized
INFO - 2025-05-15 09:57:50 --> Language Class Initialized
INFO - 2025-05-15 09:57:50 --> Loader Class Initialized
INFO - 2025-05-15 09:57:50 --> Helper loaded: url_helper
INFO - 2025-05-15 09:57:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 09:57:50 --> Helper loaded: form_helper
INFO - 2025-05-15 09:57:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 09:57:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 09:57:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 09:57:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 09:57:50 --> Form Validation Class Initialized
INFO - 2025-05-15 09:57:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 09:57:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 09:57:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 09:57:50 --> Controller Class Initialized
INFO - 2025-05-15 09:57:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 09:57:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 09:57:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 09:57:50 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 09:57:50 --> Final output sent to browser
DEBUG - 2025-05-15 09:57:50 --> Total execution time: 0.0192
INFO - 2025-05-15 10:01:08 --> Config Class Initialized
INFO - 2025-05-15 10:01:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:01:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:01:08 --> Utf8 Class Initialized
INFO - 2025-05-15 10:01:08 --> URI Class Initialized
INFO - 2025-05-15 10:01:08 --> Router Class Initialized
INFO - 2025-05-15 10:01:08 --> Output Class Initialized
INFO - 2025-05-15 10:01:08 --> Security Class Initialized
DEBUG - 2025-05-15 10:01:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:01:08 --> Input Class Initialized
INFO - 2025-05-15 10:01:08 --> Language Class Initialized
INFO - 2025-05-15 10:01:08 --> Loader Class Initialized
INFO - 2025-05-15 10:01:08 --> Helper loaded: url_helper
INFO - 2025-05-15 10:01:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:01:08 --> Helper loaded: form_helper
INFO - 2025-05-15 10:01:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:01:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:01:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:01:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:01:08 --> Form Validation Class Initialized
INFO - 2025-05-15 10:01:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:01:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:01:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:01:08 --> Controller Class Initialized
INFO - 2025-05-15 10:01:26 --> Config Class Initialized
INFO - 2025-05-15 10:01:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:01:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:01:26 --> Utf8 Class Initialized
INFO - 2025-05-15 10:01:26 --> URI Class Initialized
INFO - 2025-05-15 10:01:26 --> Router Class Initialized
INFO - 2025-05-15 10:01:26 --> Output Class Initialized
INFO - 2025-05-15 10:01:26 --> Security Class Initialized
DEBUG - 2025-05-15 10:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:01:26 --> Input Class Initialized
INFO - 2025-05-15 10:01:26 --> Language Class Initialized
INFO - 2025-05-15 10:01:26 --> Loader Class Initialized
INFO - 2025-05-15 10:01:26 --> Helper loaded: url_helper
INFO - 2025-05-15 10:01:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:01:26 --> Helper loaded: form_helper
INFO - 2025-05-15 10:01:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:01:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:01:26 --> Form Validation Class Initialized
INFO - 2025-05-15 10:01:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:01:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:01:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:01:26 --> Controller Class Initialized
INFO - 2025-05-15 10:01:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:01:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:01:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:01:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:01:26 --> Final output sent to browser
DEBUG - 2025-05-15 10:01:26 --> Total execution time: 0.0193
INFO - 2025-05-15 10:18:41 --> Config Class Initialized
INFO - 2025-05-15 10:18:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:18:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:18:41 --> Utf8 Class Initialized
INFO - 2025-05-15 10:18:41 --> URI Class Initialized
INFO - 2025-05-15 10:18:41 --> Router Class Initialized
INFO - 2025-05-15 10:18:41 --> Output Class Initialized
INFO - 2025-05-15 10:18:41 --> Security Class Initialized
DEBUG - 2025-05-15 10:18:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:18:41 --> Input Class Initialized
INFO - 2025-05-15 10:18:41 --> Language Class Initialized
INFO - 2025-05-15 10:18:41 --> Loader Class Initialized
INFO - 2025-05-15 10:18:41 --> Helper loaded: url_helper
INFO - 2025-05-15 10:18:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:18:41 --> Helper loaded: form_helper
INFO - 2025-05-15 10:18:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:18:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:18:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:18:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:18:41 --> Form Validation Class Initialized
INFO - 2025-05-15 10:18:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:18:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:18:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:18:41 --> Controller Class Initialized
INFO - 2025-05-15 10:18:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:18:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:18:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:18:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:18:41 --> Final output sent to browser
DEBUG - 2025-05-15 10:18:41 --> Total execution time: 0.0315
INFO - 2025-05-15 10:18:45 --> Config Class Initialized
INFO - 2025-05-15 10:18:45 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:18:45 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:18:45 --> Utf8 Class Initialized
INFO - 2025-05-15 10:18:45 --> URI Class Initialized
INFO - 2025-05-15 10:18:45 --> Router Class Initialized
INFO - 2025-05-15 10:18:45 --> Output Class Initialized
INFO - 2025-05-15 10:18:46 --> Security Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:18:46 --> Input Class Initialized
INFO - 2025-05-15 10:18:46 --> Language Class Initialized
INFO - 2025-05-15 10:18:46 --> Loader Class Initialized
INFO - 2025-05-15 10:18:46 --> Helper loaded: url_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: form_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:18:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:18:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:18:46 --> Form Validation Class Initialized
INFO - 2025-05-15 10:18:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:18:46 --> Controller Class Initialized
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:18:46 --> Final output sent to browser
DEBUG - 2025-05-15 10:18:46 --> Total execution time: 0.0351
INFO - 2025-05-15 10:18:46 --> Config Class Initialized
INFO - 2025-05-15 10:18:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:18:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:18:46 --> Utf8 Class Initialized
INFO - 2025-05-15 10:18:46 --> URI Class Initialized
INFO - 2025-05-15 10:18:46 --> Router Class Initialized
INFO - 2025-05-15 10:18:46 --> Output Class Initialized
INFO - 2025-05-15 10:18:46 --> Security Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:18:46 --> Input Class Initialized
INFO - 2025-05-15 10:18:46 --> Language Class Initialized
INFO - 2025-05-15 10:18:46 --> Loader Class Initialized
INFO - 2025-05-15 10:18:46 --> Helper loaded: url_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: form_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:18:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:18:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:18:46 --> Form Validation Class Initialized
INFO - 2025-05-15 10:18:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:18:46 --> Controller Class Initialized
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:18:46 --> Final output sent to browser
DEBUG - 2025-05-15 10:18:46 --> Total execution time: 0.0379
INFO - 2025-05-15 10:18:46 --> Config Class Initialized
INFO - 2025-05-15 10:18:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:18:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:18:46 --> Utf8 Class Initialized
INFO - 2025-05-15 10:18:46 --> URI Class Initialized
INFO - 2025-05-15 10:18:46 --> Router Class Initialized
INFO - 2025-05-15 10:18:46 --> Output Class Initialized
INFO - 2025-05-15 10:18:46 --> Security Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:18:46 --> Input Class Initialized
INFO - 2025-05-15 10:18:46 --> Language Class Initialized
INFO - 2025-05-15 10:18:46 --> Loader Class Initialized
INFO - 2025-05-15 10:18:46 --> Helper loaded: url_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: form_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:18:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:18:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:18:46 --> Form Validation Class Initialized
INFO - 2025-05-15 10:18:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:18:46 --> Controller Class Initialized
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:18:46 --> Final output sent to browser
DEBUG - 2025-05-15 10:18:46 --> Total execution time: 0.0256
INFO - 2025-05-15 10:18:46 --> Config Class Initialized
INFO - 2025-05-15 10:18:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:18:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:18:46 --> Utf8 Class Initialized
INFO - 2025-05-15 10:18:46 --> URI Class Initialized
INFO - 2025-05-15 10:18:46 --> Router Class Initialized
INFO - 2025-05-15 10:18:46 --> Output Class Initialized
INFO - 2025-05-15 10:18:46 --> Security Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:18:46 --> Input Class Initialized
INFO - 2025-05-15 10:18:46 --> Language Class Initialized
INFO - 2025-05-15 10:18:46 --> Loader Class Initialized
INFO - 2025-05-15 10:18:46 --> Helper loaded: url_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: form_helper
INFO - 2025-05-15 10:18:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:18:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:18:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:18:46 --> Form Validation Class Initialized
INFO - 2025-05-15 10:18:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:18:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:18:46 --> Controller Class Initialized
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:18:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:18:46 --> Final output sent to browser
DEBUG - 2025-05-15 10:18:46 --> Total execution time: 0.0319
INFO - 2025-05-15 10:18:52 --> Config Class Initialized
INFO - 2025-05-15 10:18:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:18:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:18:52 --> Utf8 Class Initialized
INFO - 2025-05-15 10:18:52 --> URI Class Initialized
INFO - 2025-05-15 10:18:52 --> Router Class Initialized
INFO - 2025-05-15 10:18:52 --> Output Class Initialized
INFO - 2025-05-15 10:18:52 --> Security Class Initialized
DEBUG - 2025-05-15 10:18:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:18:52 --> Input Class Initialized
INFO - 2025-05-15 10:18:52 --> Language Class Initialized
INFO - 2025-05-15 10:18:52 --> Loader Class Initialized
INFO - 2025-05-15 10:18:52 --> Helper loaded: url_helper
INFO - 2025-05-15 10:18:52 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:18:52 --> Helper loaded: form_helper
INFO - 2025-05-15 10:18:52 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:18:52 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:18:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:18:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:18:52 --> Form Validation Class Initialized
INFO - 2025-05-15 10:18:52 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:18:52 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:18:52 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:18:52 --> Controller Class Initialized
INFO - 2025-05-15 10:30:49 --> Config Class Initialized
INFO - 2025-05-15 10:30:49 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:49 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:49 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:49 --> URI Class Initialized
INFO - 2025-05-15 10:30:49 --> Router Class Initialized
INFO - 2025-05-15 10:30:49 --> Output Class Initialized
INFO - 2025-05-15 10:30:49 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:49 --> Input Class Initialized
INFO - 2025-05-15 10:30:49 --> Language Class Initialized
ERROR - 2025-05-15 10:30:49 --> Severity: error --> Exception: syntax error, unexpected ''alignment'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /var/www/html/codeigniter/application/controllers/Transaksi.php 441
INFO - 2025-05-15 10:30:52 --> Config Class Initialized
INFO - 2025-05-15 10:30:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:52 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:52 --> URI Class Initialized
INFO - 2025-05-15 10:30:52 --> Router Class Initialized
INFO - 2025-05-15 10:30:52 --> Output Class Initialized
INFO - 2025-05-15 10:30:52 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:52 --> Input Class Initialized
INFO - 2025-05-15 10:30:52 --> Language Class Initialized
ERROR - 2025-05-15 10:30:52 --> Severity: error --> Exception: syntax error, unexpected ''alignment'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /var/www/html/codeigniter/application/controllers/Transaksi.php 441
INFO - 2025-05-15 10:30:53 --> Config Class Initialized
INFO - 2025-05-15 10:30:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:53 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:53 --> URI Class Initialized
INFO - 2025-05-15 10:30:53 --> Router Class Initialized
INFO - 2025-05-15 10:30:53 --> Output Class Initialized
INFO - 2025-05-15 10:30:53 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:53 --> Input Class Initialized
INFO - 2025-05-15 10:30:53 --> Language Class Initialized
ERROR - 2025-05-15 10:30:53 --> Severity: error --> Exception: syntax error, unexpected ''alignment'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /var/www/html/codeigniter/application/controllers/Transaksi.php 441
INFO - 2025-05-15 10:30:53 --> Config Class Initialized
INFO - 2025-05-15 10:30:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:53 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:53 --> URI Class Initialized
INFO - 2025-05-15 10:30:53 --> Router Class Initialized
INFO - 2025-05-15 10:30:53 --> Output Class Initialized
INFO - 2025-05-15 10:30:53 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:53 --> Input Class Initialized
INFO - 2025-05-15 10:30:53 --> Language Class Initialized
ERROR - 2025-05-15 10:30:53 --> Severity: error --> Exception: syntax error, unexpected ''alignment'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /var/www/html/codeigniter/application/controllers/Transaksi.php 441
INFO - 2025-05-15 10:30:54 --> Config Class Initialized
INFO - 2025-05-15 10:30:54 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:54 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:54 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:54 --> URI Class Initialized
INFO - 2025-05-15 10:30:54 --> Router Class Initialized
INFO - 2025-05-15 10:30:54 --> Output Class Initialized
INFO - 2025-05-15 10:30:54 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:54 --> Input Class Initialized
INFO - 2025-05-15 10:30:54 --> Language Class Initialized
INFO - 2025-05-15 10:30:54 --> Loader Class Initialized
INFO - 2025-05-15 10:30:54 --> Helper loaded: url_helper
INFO - 2025-05-15 10:30:54 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:30:54 --> Helper loaded: form_helper
INFO - 2025-05-15 10:30:54 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:30:54 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:30:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:30:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:30:54 --> Form Validation Class Initialized
INFO - 2025-05-15 10:30:54 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:30:54 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:30:54 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:30:54 --> Controller Class Initialized
INFO - 2025-05-15 10:30:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:30:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:30:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:30:54 --> File loaded: /var/www/html/codeigniter/application/views/barang/index.php
INFO - 2025-05-15 10:30:54 --> Final output sent to browser
DEBUG - 2025-05-15 10:30:54 --> Total execution time: 0.0101
INFO - 2025-05-15 10:30:55 --> Config Class Initialized
INFO - 2025-05-15 10:30:55 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:55 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:55 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:55 --> URI Class Initialized
INFO - 2025-05-15 10:30:55 --> Router Class Initialized
INFO - 2025-05-15 10:30:55 --> Output Class Initialized
INFO - 2025-05-15 10:30:55 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:55 --> Input Class Initialized
INFO - 2025-05-15 10:30:55 --> Language Class Initialized
ERROR - 2025-05-15 10:30:55 --> Severity: error --> Exception: syntax error, unexpected ''alignment'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /var/www/html/codeigniter/application/controllers/Transaksi.php 441
INFO - 2025-05-15 10:30:56 --> Config Class Initialized
INFO - 2025-05-15 10:30:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:30:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:30:56 --> Utf8 Class Initialized
INFO - 2025-05-15 10:30:56 --> URI Class Initialized
INFO - 2025-05-15 10:30:56 --> Router Class Initialized
INFO - 2025-05-15 10:30:56 --> Output Class Initialized
INFO - 2025-05-15 10:30:56 --> Security Class Initialized
DEBUG - 2025-05-15 10:30:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:30:56 --> Input Class Initialized
INFO - 2025-05-15 10:30:56 --> Language Class Initialized
ERROR - 2025-05-15 10:30:56 --> Severity: error --> Exception: syntax error, unexpected ''alignment'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /var/www/html/codeigniter/application/controllers/Transaksi.php 441
INFO - 2025-05-15 10:31:23 --> Config Class Initialized
INFO - 2025-05-15 10:31:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:31:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:31:23 --> Utf8 Class Initialized
INFO - 2025-05-15 10:31:23 --> URI Class Initialized
INFO - 2025-05-15 10:31:23 --> Router Class Initialized
INFO - 2025-05-15 10:31:23 --> Output Class Initialized
INFO - 2025-05-15 10:31:23 --> Security Class Initialized
DEBUG - 2025-05-15 10:31:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:31:23 --> Input Class Initialized
INFO - 2025-05-15 10:31:23 --> Language Class Initialized
INFO - 2025-05-15 10:31:23 --> Loader Class Initialized
INFO - 2025-05-15 10:31:23 --> Helper loaded: url_helper
INFO - 2025-05-15 10:31:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:31:23 --> Helper loaded: form_helper
INFO - 2025-05-15 10:31:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:31:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:31:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:31:23 --> Form Validation Class Initialized
INFO - 2025-05-15 10:31:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:31:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:31:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:31:23 --> Controller Class Initialized
INFO - 2025-05-15 10:31:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:31:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:31:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:31:23 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:31:23 --> Final output sent to browser
DEBUG - 2025-05-15 10:31:23 --> Total execution time: 0.0240
INFO - 2025-05-15 10:31:29 --> Config Class Initialized
INFO - 2025-05-15 10:31:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:31:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:31:29 --> Utf8 Class Initialized
INFO - 2025-05-15 10:31:29 --> URI Class Initialized
INFO - 2025-05-15 10:31:29 --> Router Class Initialized
INFO - 2025-05-15 10:31:29 --> Output Class Initialized
INFO - 2025-05-15 10:31:29 --> Security Class Initialized
DEBUG - 2025-05-15 10:31:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:31:29 --> Input Class Initialized
INFO - 2025-05-15 10:31:29 --> Language Class Initialized
INFO - 2025-05-15 10:31:29 --> Loader Class Initialized
INFO - 2025-05-15 10:31:29 --> Helper loaded: url_helper
INFO - 2025-05-15 10:31:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:31:29 --> Helper loaded: form_helper
INFO - 2025-05-15 10:31:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:31:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:31:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:31:29 --> Form Validation Class Initialized
INFO - 2025-05-15 10:31:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:31:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:31:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:31:29 --> Controller Class Initialized
INFO - 2025-05-15 10:31:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:31:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:31:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:31:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:31:29 --> Final output sent to browser
DEBUG - 2025-05-15 10:31:29 --> Total execution time: 0.0172
INFO - 2025-05-15 10:31:42 --> Config Class Initialized
INFO - 2025-05-15 10:31:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:31:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:31:42 --> Utf8 Class Initialized
INFO - 2025-05-15 10:31:42 --> URI Class Initialized
INFO - 2025-05-15 10:31:42 --> Router Class Initialized
INFO - 2025-05-15 10:31:42 --> Output Class Initialized
INFO - 2025-05-15 10:31:42 --> Security Class Initialized
DEBUG - 2025-05-15 10:31:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:31:42 --> Input Class Initialized
INFO - 2025-05-15 10:31:42 --> Language Class Initialized
INFO - 2025-05-15 10:31:42 --> Loader Class Initialized
INFO - 2025-05-15 10:31:42 --> Helper loaded: url_helper
INFO - 2025-05-15 10:31:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:31:42 --> Helper loaded: form_helper
INFO - 2025-05-15 10:31:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:31:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:31:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:31:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:31:42 --> Form Validation Class Initialized
INFO - 2025-05-15 10:31:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:31:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:31:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:31:42 --> Controller Class Initialized
INFO - 2025-05-15 10:31:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:31:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:31:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:31:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:31:42 --> Final output sent to browser
DEBUG - 2025-05-15 10:31:42 --> Total execution time: 0.0395
INFO - 2025-05-15 10:31:50 --> Config Class Initialized
INFO - 2025-05-15 10:31:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:31:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:31:50 --> Utf8 Class Initialized
INFO - 2025-05-15 10:31:50 --> URI Class Initialized
INFO - 2025-05-15 10:31:50 --> Router Class Initialized
INFO - 2025-05-15 10:31:50 --> Output Class Initialized
INFO - 2025-05-15 10:31:50 --> Security Class Initialized
DEBUG - 2025-05-15 10:31:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:31:50 --> Input Class Initialized
INFO - 2025-05-15 10:31:50 --> Language Class Initialized
INFO - 2025-05-15 10:31:50 --> Loader Class Initialized
INFO - 2025-05-15 10:31:50 --> Helper loaded: url_helper
INFO - 2025-05-15 10:31:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:31:50 --> Helper loaded: form_helper
INFO - 2025-05-15 10:31:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:31:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:31:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:31:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:31:50 --> Form Validation Class Initialized
INFO - 2025-05-15 10:31:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:31:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:31:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:31:50 --> Controller Class Initialized
INFO - 2025-05-15 10:31:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:31:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:31:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:31:50 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:31:50 --> Final output sent to browser
DEBUG - 2025-05-15 10:31:50 --> Total execution time: 0.0360
INFO - 2025-05-15 10:31:51 --> Config Class Initialized
INFO - 2025-05-15 10:31:51 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:31:51 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:31:51 --> Utf8 Class Initialized
INFO - 2025-05-15 10:31:51 --> URI Class Initialized
INFO - 2025-05-15 10:31:51 --> Router Class Initialized
INFO - 2025-05-15 10:31:51 --> Output Class Initialized
INFO - 2025-05-15 10:31:51 --> Security Class Initialized
DEBUG - 2025-05-15 10:31:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:31:51 --> Input Class Initialized
INFO - 2025-05-15 10:31:51 --> Language Class Initialized
INFO - 2025-05-15 10:31:51 --> Loader Class Initialized
INFO - 2025-05-15 10:31:51 --> Helper loaded: url_helper
INFO - 2025-05-15 10:31:51 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:31:51 --> Helper loaded: form_helper
INFO - 2025-05-15 10:31:51 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:31:51 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:31:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:31:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:31:51 --> Form Validation Class Initialized
INFO - 2025-05-15 10:31:51 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:31:51 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:31:51 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:31:51 --> Controller Class Initialized
INFO - 2025-05-15 10:31:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:31:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:31:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:31:51 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:31:51 --> Final output sent to browser
DEBUG - 2025-05-15 10:31:51 --> Total execution time: 0.0198
INFO - 2025-05-15 10:31:55 --> Config Class Initialized
INFO - 2025-05-15 10:31:55 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:31:55 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:31:55 --> Utf8 Class Initialized
INFO - 2025-05-15 10:31:55 --> URI Class Initialized
INFO - 2025-05-15 10:31:55 --> Router Class Initialized
INFO - 2025-05-15 10:31:55 --> Output Class Initialized
INFO - 2025-05-15 10:31:55 --> Security Class Initialized
DEBUG - 2025-05-15 10:31:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:31:55 --> Input Class Initialized
INFO - 2025-05-15 10:31:55 --> Language Class Initialized
INFO - 2025-05-15 10:31:55 --> Loader Class Initialized
INFO - 2025-05-15 10:31:55 --> Helper loaded: url_helper
INFO - 2025-05-15 10:31:55 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:31:55 --> Helper loaded: form_helper
INFO - 2025-05-15 10:31:55 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:31:55 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:31:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:31:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:31:55 --> Form Validation Class Initialized
INFO - 2025-05-15 10:31:55 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:31:55 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:31:55 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:31:55 --> Controller Class Initialized
INFO - 2025-05-15 10:31:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:31:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:31:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:31:55 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:31:55 --> Final output sent to browser
DEBUG - 2025-05-15 10:31:55 --> Total execution time: 0.0238
INFO - 2025-05-15 10:32:19 --> Config Class Initialized
INFO - 2025-05-15 10:32:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:32:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:32:19 --> Utf8 Class Initialized
INFO - 2025-05-15 10:32:19 --> URI Class Initialized
INFO - 2025-05-15 10:32:19 --> Router Class Initialized
INFO - 2025-05-15 10:32:19 --> Output Class Initialized
INFO - 2025-05-15 10:32:19 --> Security Class Initialized
DEBUG - 2025-05-15 10:32:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:32:19 --> Input Class Initialized
INFO - 2025-05-15 10:32:19 --> Language Class Initialized
INFO - 2025-05-15 10:32:19 --> Loader Class Initialized
INFO - 2025-05-15 10:32:19 --> Helper loaded: url_helper
INFO - 2025-05-15 10:32:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:32:19 --> Helper loaded: form_helper
INFO - 2025-05-15 10:32:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:32:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:32:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:32:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:32:19 --> Form Validation Class Initialized
INFO - 2025-05-15 10:32:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:32:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:32:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:32:19 --> Controller Class Initialized
INFO - 2025-05-15 10:32:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:32:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:32:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:32:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:32:19 --> Final output sent to browser
DEBUG - 2025-05-15 10:32:19 --> Total execution time: 0.0398
INFO - 2025-05-15 10:32:25 --> Config Class Initialized
INFO - 2025-05-15 10:32:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 10:32:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 10:32:25 --> Utf8 Class Initialized
INFO - 2025-05-15 10:32:25 --> URI Class Initialized
INFO - 2025-05-15 10:32:25 --> Router Class Initialized
INFO - 2025-05-15 10:32:25 --> Output Class Initialized
INFO - 2025-05-15 10:32:25 --> Security Class Initialized
DEBUG - 2025-05-15 10:32:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 10:32:25 --> Input Class Initialized
INFO - 2025-05-15 10:32:25 --> Language Class Initialized
INFO - 2025-05-15 10:32:25 --> Loader Class Initialized
INFO - 2025-05-15 10:32:25 --> Helper loaded: url_helper
INFO - 2025-05-15 10:32:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 10:32:25 --> Helper loaded: form_helper
INFO - 2025-05-15 10:32:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 10:32:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 10:32:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 10:32:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 10:32:25 --> Form Validation Class Initialized
INFO - 2025-05-15 10:32:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 10:32:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 10:32:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 10:32:25 --> Controller Class Initialized
INFO - 2025-05-15 10:32:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 10:32:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 10:32:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 10:32:25 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 10:32:25 --> Final output sent to browser
DEBUG - 2025-05-15 10:32:25 --> Total execution time: 0.0399
