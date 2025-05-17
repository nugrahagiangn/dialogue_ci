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
INFO - 2025-05-15 11:26:40 --> Config Class Initialized
INFO - 2025-05-15 11:26:40 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:26:40 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:26:40 --> Utf8 Class Initialized
INFO - 2025-05-15 11:26:40 --> URI Class Initialized
INFO - 2025-05-15 11:26:40 --> Router Class Initialized
INFO - 2025-05-15 11:26:40 --> Output Class Initialized
INFO - 2025-05-15 11:26:40 --> Security Class Initialized
DEBUG - 2025-05-15 11:26:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:26:40 --> Input Class Initialized
INFO - 2025-05-15 11:26:40 --> Language Class Initialized
INFO - 2025-05-15 11:26:40 --> Loader Class Initialized
INFO - 2025-05-15 11:26:40 --> Helper loaded: url_helper
INFO - 2025-05-15 11:26:40 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:26:40 --> Helper loaded: form_helper
INFO - 2025-05-15 11:26:40 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:26:40 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:26:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:26:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:26:40 --> Form Validation Class Initialized
INFO - 2025-05-15 11:26:40 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:26:40 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:26:40 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:26:40 --> Controller Class Initialized
INFO - 2025-05-15 11:26:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:26:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:26:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:26:40 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:26:40 --> Final output sent to browser
DEBUG - 2025-05-15 11:26:40 --> Total execution time: 0.0520
INFO - 2025-05-15 11:26:51 --> Config Class Initialized
INFO - 2025-05-15 11:26:51 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:26:51 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:26:51 --> Utf8 Class Initialized
INFO - 2025-05-15 11:26:51 --> URI Class Initialized
INFO - 2025-05-15 11:26:51 --> Router Class Initialized
INFO - 2025-05-15 11:26:51 --> Output Class Initialized
INFO - 2025-05-15 11:26:51 --> Security Class Initialized
DEBUG - 2025-05-15 11:26:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:26:51 --> Input Class Initialized
INFO - 2025-05-15 11:26:51 --> Language Class Initialized
INFO - 2025-05-15 11:26:51 --> Loader Class Initialized
INFO - 2025-05-15 11:26:51 --> Helper loaded: url_helper
INFO - 2025-05-15 11:26:51 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:26:51 --> Helper loaded: form_helper
INFO - 2025-05-15 11:26:51 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:26:51 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:26:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:26:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:26:51 --> Form Validation Class Initialized
INFO - 2025-05-15 11:26:51 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:26:51 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:26:51 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:26:51 --> Controller Class Initialized
INFO - 2025-05-15 11:26:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:26:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:26:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:26:51 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:26:51 --> Final output sent to browser
DEBUG - 2025-05-15 11:26:51 --> Total execution time: 0.0267
INFO - 2025-05-15 11:31:09 --> Config Class Initialized
INFO - 2025-05-15 11:31:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:31:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:31:09 --> Utf8 Class Initialized
INFO - 2025-05-15 11:31:09 --> URI Class Initialized
INFO - 2025-05-15 11:31:09 --> Router Class Initialized
INFO - 2025-05-15 11:31:09 --> Output Class Initialized
INFO - 2025-05-15 11:31:09 --> Security Class Initialized
DEBUG - 2025-05-15 11:31:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:31:09 --> Input Class Initialized
INFO - 2025-05-15 11:31:09 --> Language Class Initialized
INFO - 2025-05-15 11:31:09 --> Loader Class Initialized
INFO - 2025-05-15 11:31:09 --> Helper loaded: url_helper
INFO - 2025-05-15 11:31:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:31:09 --> Helper loaded: form_helper
INFO - 2025-05-15 11:31:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:31:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:31:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:31:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:31:09 --> Form Validation Class Initialized
INFO - 2025-05-15 11:31:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:31:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:31:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:31:09 --> Controller Class Initialized
INFO - 2025-05-15 11:31:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:31:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:31:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:31:09 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:31:09 --> Final output sent to browser
DEBUG - 2025-05-15 11:31:09 --> Total execution time: 0.0421
INFO - 2025-05-15 11:31:10 --> Config Class Initialized
INFO - 2025-05-15 11:31:10 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:31:10 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:31:10 --> Utf8 Class Initialized
INFO - 2025-05-15 11:31:10 --> URI Class Initialized
INFO - 2025-05-15 11:31:10 --> Router Class Initialized
INFO - 2025-05-15 11:31:10 --> Output Class Initialized
INFO - 2025-05-15 11:31:10 --> Security Class Initialized
DEBUG - 2025-05-15 11:31:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:31:10 --> Input Class Initialized
INFO - 2025-05-15 11:31:10 --> Language Class Initialized
INFO - 2025-05-15 11:31:10 --> Loader Class Initialized
INFO - 2025-05-15 11:31:10 --> Helper loaded: url_helper
INFO - 2025-05-15 11:31:10 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:31:10 --> Helper loaded: form_helper
INFO - 2025-05-15 11:31:10 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:31:10 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:31:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:31:10 --> Form Validation Class Initialized
INFO - 2025-05-15 11:31:10 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:31:10 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:31:10 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:31:10 --> Controller Class Initialized
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:31:10 --> Final output sent to browser
DEBUG - 2025-05-15 11:31:10 --> Total execution time: 0.0398
INFO - 2025-05-15 11:31:10 --> Config Class Initialized
INFO - 2025-05-15 11:31:10 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:31:10 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:31:10 --> Utf8 Class Initialized
INFO - 2025-05-15 11:31:10 --> URI Class Initialized
INFO - 2025-05-15 11:31:10 --> Router Class Initialized
INFO - 2025-05-15 11:31:10 --> Output Class Initialized
INFO - 2025-05-15 11:31:10 --> Security Class Initialized
DEBUG - 2025-05-15 11:31:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:31:10 --> Input Class Initialized
INFO - 2025-05-15 11:31:10 --> Language Class Initialized
INFO - 2025-05-15 11:31:10 --> Loader Class Initialized
INFO - 2025-05-15 11:31:10 --> Helper loaded: url_helper
INFO - 2025-05-15 11:31:10 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:31:10 --> Helper loaded: form_helper
INFO - 2025-05-15 11:31:10 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:31:10 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:31:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:31:10 --> Form Validation Class Initialized
INFO - 2025-05-15 11:31:10 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:31:10 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:31:10 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:31:10 --> Controller Class Initialized
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:31:10 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:31:10 --> Final output sent to browser
DEBUG - 2025-05-15 11:31:10 --> Total execution time: 0.0088
INFO - 2025-05-15 11:31:17 --> Config Class Initialized
INFO - 2025-05-15 11:31:17 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:31:17 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:31:17 --> Utf8 Class Initialized
INFO - 2025-05-15 11:31:17 --> URI Class Initialized
INFO - 2025-05-15 11:31:17 --> Router Class Initialized
INFO - 2025-05-15 11:31:17 --> Output Class Initialized
INFO - 2025-05-15 11:31:17 --> Security Class Initialized
DEBUG - 2025-05-15 11:31:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:31:17 --> Input Class Initialized
INFO - 2025-05-15 11:31:17 --> Language Class Initialized
INFO - 2025-05-15 11:31:17 --> Loader Class Initialized
INFO - 2025-05-15 11:31:17 --> Helper loaded: url_helper
INFO - 2025-05-15 11:31:17 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:31:17 --> Helper loaded: form_helper
INFO - 2025-05-15 11:31:17 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:31:17 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:31:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:31:17 --> Form Validation Class Initialized
INFO - 2025-05-15 11:31:17 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:31:17 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:31:17 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:31:17 --> Controller Class Initialized
INFO - 2025-05-15 11:31:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:31:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:31:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:31:17 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:31:17 --> Final output sent to browser
DEBUG - 2025-05-15 11:31:17 --> Total execution time: 0.0095
INFO - 2025-05-15 11:31:18 --> Config Class Initialized
INFO - 2025-05-15 11:31:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:31:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:31:18 --> Utf8 Class Initialized
INFO - 2025-05-15 11:31:18 --> URI Class Initialized
INFO - 2025-05-15 11:31:18 --> Router Class Initialized
INFO - 2025-05-15 11:31:18 --> Output Class Initialized
INFO - 2025-05-15 11:31:18 --> Security Class Initialized
DEBUG - 2025-05-15 11:31:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:31:18 --> Input Class Initialized
INFO - 2025-05-15 11:31:18 --> Language Class Initialized
INFO - 2025-05-15 11:31:18 --> Loader Class Initialized
INFO - 2025-05-15 11:31:18 --> Helper loaded: url_helper
INFO - 2025-05-15 11:31:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:31:18 --> Helper loaded: form_helper
INFO - 2025-05-15 11:31:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:31:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:31:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:31:18 --> Form Validation Class Initialized
INFO - 2025-05-15 11:31:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:31:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:31:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:31:18 --> Controller Class Initialized
INFO - 2025-05-15 11:31:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:31:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:31:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:31:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:31:18 --> Final output sent to browser
DEBUG - 2025-05-15 11:31:18 --> Total execution time: 0.0390
INFO - 2025-05-15 11:32:09 --> Config Class Initialized
INFO - 2025-05-15 11:32:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:32:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:32:09 --> Utf8 Class Initialized
INFO - 2025-05-15 11:32:09 --> URI Class Initialized
INFO - 2025-05-15 11:32:09 --> Router Class Initialized
INFO - 2025-05-15 11:32:09 --> Output Class Initialized
INFO - 2025-05-15 11:32:09 --> Security Class Initialized
DEBUG - 2025-05-15 11:32:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:32:09 --> Input Class Initialized
INFO - 2025-05-15 11:32:09 --> Language Class Initialized
INFO - 2025-05-15 11:32:09 --> Loader Class Initialized
INFO - 2025-05-15 11:32:09 --> Helper loaded: url_helper
INFO - 2025-05-15 11:32:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:32:09 --> Helper loaded: form_helper
INFO - 2025-05-15 11:32:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:32:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:32:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:32:09 --> Form Validation Class Initialized
INFO - 2025-05-15 11:32:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:32:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:32:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:32:09 --> Controller Class Initialized
INFO - 2025-05-15 11:32:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:32:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:32:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:32:09 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:32:09 --> Final output sent to browser
DEBUG - 2025-05-15 11:32:09 --> Total execution time: 0.0102
INFO - 2025-05-15 11:36:19 --> Config Class Initialized
INFO - 2025-05-15 11:36:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:36:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:36:19 --> Utf8 Class Initialized
INFO - 2025-05-15 11:36:19 --> URI Class Initialized
INFO - 2025-05-15 11:36:19 --> Router Class Initialized
INFO - 2025-05-15 11:36:19 --> Output Class Initialized
INFO - 2025-05-15 11:36:19 --> Security Class Initialized
DEBUG - 2025-05-15 11:36:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:36:19 --> Input Class Initialized
INFO - 2025-05-15 11:36:19 --> Language Class Initialized
INFO - 2025-05-15 11:36:19 --> Loader Class Initialized
INFO - 2025-05-15 11:36:19 --> Helper loaded: url_helper
INFO - 2025-05-15 11:36:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:36:19 --> Helper loaded: form_helper
INFO - 2025-05-15 11:36:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:36:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:36:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:36:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:36:19 --> Form Validation Class Initialized
INFO - 2025-05-15 11:36:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:36:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:36:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:36:19 --> Controller Class Initialized
INFO - 2025-05-15 11:36:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:36:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:36:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:36:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:36:19 --> Final output sent to browser
DEBUG - 2025-05-15 11:36:19 --> Total execution time: 0.0404
INFO - 2025-05-15 11:36:20 --> Config Class Initialized
INFO - 2025-05-15 11:36:20 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:36:20 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:36:20 --> Utf8 Class Initialized
INFO - 2025-05-15 11:36:20 --> URI Class Initialized
INFO - 2025-05-15 11:36:20 --> Router Class Initialized
INFO - 2025-05-15 11:36:20 --> Output Class Initialized
INFO - 2025-05-15 11:36:20 --> Security Class Initialized
DEBUG - 2025-05-15 11:36:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:36:20 --> Input Class Initialized
INFO - 2025-05-15 11:36:20 --> Language Class Initialized
INFO - 2025-05-15 11:36:20 --> Loader Class Initialized
INFO - 2025-05-15 11:36:20 --> Helper loaded: url_helper
INFO - 2025-05-15 11:36:20 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:36:20 --> Helper loaded: form_helper
INFO - 2025-05-15 11:36:20 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:36:20 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:36:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:36:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:36:20 --> Form Validation Class Initialized
INFO - 2025-05-15 11:36:20 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:36:20 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:36:20 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:36:20 --> Controller Class Initialized
INFO - 2025-05-15 11:36:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:36:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:36:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:36:20 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:36:20 --> Final output sent to browser
DEBUG - 2025-05-15 11:36:20 --> Total execution time: 0.0394
INFO - 2025-05-15 11:36:21 --> Config Class Initialized
INFO - 2025-05-15 11:36:21 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:36:21 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:36:21 --> Utf8 Class Initialized
INFO - 2025-05-15 11:36:21 --> URI Class Initialized
INFO - 2025-05-15 11:36:21 --> Router Class Initialized
INFO - 2025-05-15 11:36:21 --> Output Class Initialized
INFO - 2025-05-15 11:36:21 --> Security Class Initialized
DEBUG - 2025-05-15 11:36:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:36:21 --> Input Class Initialized
INFO - 2025-05-15 11:36:21 --> Language Class Initialized
INFO - 2025-05-15 11:36:21 --> Loader Class Initialized
INFO - 2025-05-15 11:36:21 --> Helper loaded: url_helper
INFO - 2025-05-15 11:36:21 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:36:21 --> Helper loaded: form_helper
INFO - 2025-05-15 11:36:21 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:36:21 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:36:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:36:21 --> Form Validation Class Initialized
INFO - 2025-05-15 11:36:21 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:36:21 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:36:21 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:36:21 --> Controller Class Initialized
INFO - 2025-05-15 11:36:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:36:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:36:21 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:36:21 --> Final output sent to browser
DEBUG - 2025-05-15 11:36:21 --> Total execution time: 0.0100
INFO - 2025-05-15 11:36:34 --> Config Class Initialized
INFO - 2025-05-15 11:36:34 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:36:34 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:36:34 --> Utf8 Class Initialized
INFO - 2025-05-15 11:36:34 --> URI Class Initialized
INFO - 2025-05-15 11:36:34 --> Router Class Initialized
INFO - 2025-05-15 11:36:34 --> Output Class Initialized
INFO - 2025-05-15 11:36:34 --> Security Class Initialized
DEBUG - 2025-05-15 11:36:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:36:34 --> Input Class Initialized
INFO - 2025-05-15 11:36:34 --> Language Class Initialized
INFO - 2025-05-15 11:36:34 --> Loader Class Initialized
INFO - 2025-05-15 11:36:34 --> Helper loaded: url_helper
INFO - 2025-05-15 11:36:34 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:36:34 --> Helper loaded: form_helper
INFO - 2025-05-15 11:36:34 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:36:34 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:36:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:36:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:36:34 --> Form Validation Class Initialized
INFO - 2025-05-15 11:36:34 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:36:34 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:36:34 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:36:34 --> Controller Class Initialized
INFO - 2025-05-15 11:36:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:36:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:36:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:36:34 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:36:34 --> Final output sent to browser
DEBUG - 2025-05-15 11:36:34 --> Total execution time: 0.0195
INFO - 2025-05-15 11:47:39 --> Config Class Initialized
INFO - 2025-05-15 11:47:39 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:39 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:39 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:39 --> URI Class Initialized
INFO - 2025-05-15 11:47:39 --> Router Class Initialized
INFO - 2025-05-15 11:47:39 --> Output Class Initialized
INFO - 2025-05-15 11:47:39 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:39 --> Input Class Initialized
INFO - 2025-05-15 11:47:39 --> Language Class Initialized
INFO - 2025-05-15 11:47:39 --> Loader Class Initialized
INFO - 2025-05-15 11:47:39 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:39 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:39 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:39 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:39 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:39 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:39 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:39 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:39 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:39 --> Controller Class Initialized
INFO - 2025-05-15 11:47:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:39 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:39 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:39 --> Total execution time: 0.0414
INFO - 2025-05-15 11:47:40 --> Config Class Initialized
INFO - 2025-05-15 11:47:40 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:40 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:40 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:40 --> URI Class Initialized
INFO - 2025-05-15 11:47:40 --> Router Class Initialized
INFO - 2025-05-15 11:47:40 --> Output Class Initialized
INFO - 2025-05-15 11:47:40 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:40 --> Input Class Initialized
INFO - 2025-05-15 11:47:40 --> Language Class Initialized
INFO - 2025-05-15 11:47:40 --> Loader Class Initialized
INFO - 2025-05-15 11:47:40 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:40 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:40 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:40 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:40 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:40 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:40 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:40 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:40 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:40 --> Controller Class Initialized
INFO - 2025-05-15 11:47:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:40 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:40 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:40 --> Total execution time: 0.0331
INFO - 2025-05-15 11:47:41 --> Config Class Initialized
INFO - 2025-05-15 11:47:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:41 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:41 --> URI Class Initialized
INFO - 2025-05-15 11:47:41 --> Router Class Initialized
INFO - 2025-05-15 11:47:41 --> Output Class Initialized
INFO - 2025-05-15 11:47:41 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:41 --> Input Class Initialized
INFO - 2025-05-15 11:47:41 --> Language Class Initialized
INFO - 2025-05-15 11:47:41 --> Loader Class Initialized
INFO - 2025-05-15 11:47:41 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:41 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:41 --> Controller Class Initialized
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:41 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:41 --> Total execution time: 0.0398
INFO - 2025-05-15 11:47:41 --> Config Class Initialized
INFO - 2025-05-15 11:47:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:41 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:41 --> URI Class Initialized
INFO - 2025-05-15 11:47:41 --> Router Class Initialized
INFO - 2025-05-15 11:47:41 --> Output Class Initialized
INFO - 2025-05-15 11:47:41 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:41 --> Input Class Initialized
INFO - 2025-05-15 11:47:41 --> Language Class Initialized
INFO - 2025-05-15 11:47:41 --> Loader Class Initialized
INFO - 2025-05-15 11:47:41 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:41 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:41 --> Controller Class Initialized
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:41 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:41 --> Total execution time: 0.0395
INFO - 2025-05-15 11:47:41 --> Config Class Initialized
INFO - 2025-05-15 11:47:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:41 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:41 --> URI Class Initialized
INFO - 2025-05-15 11:47:41 --> Router Class Initialized
INFO - 2025-05-15 11:47:41 --> Output Class Initialized
INFO - 2025-05-15 11:47:41 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:41 --> Input Class Initialized
INFO - 2025-05-15 11:47:41 --> Language Class Initialized
INFO - 2025-05-15 11:47:41 --> Loader Class Initialized
INFO - 2025-05-15 11:47:41 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:41 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:41 --> Controller Class Initialized
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:41 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:41 --> Total execution time: 0.0205
INFO - 2025-05-15 11:47:42 --> Config Class Initialized
INFO - 2025-05-15 11:47:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:42 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:42 --> URI Class Initialized
INFO - 2025-05-15 11:47:42 --> Router Class Initialized
INFO - 2025-05-15 11:47:42 --> Output Class Initialized
INFO - 2025-05-15 11:47:42 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:42 --> Input Class Initialized
INFO - 2025-05-15 11:47:42 --> Language Class Initialized
INFO - 2025-05-15 11:47:42 --> Loader Class Initialized
INFO - 2025-05-15 11:47:42 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:42 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:42 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:42 --> Controller Class Initialized
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:42 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:42 --> Total execution time: 0.0135
INFO - 2025-05-15 11:47:42 --> Config Class Initialized
INFO - 2025-05-15 11:47:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:42 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:42 --> URI Class Initialized
INFO - 2025-05-15 11:47:42 --> Router Class Initialized
INFO - 2025-05-15 11:47:42 --> Output Class Initialized
INFO - 2025-05-15 11:47:42 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:42 --> Input Class Initialized
INFO - 2025-05-15 11:47:42 --> Language Class Initialized
INFO - 2025-05-15 11:47:42 --> Loader Class Initialized
INFO - 2025-05-15 11:47:42 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:42 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:42 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:42 --> Controller Class Initialized
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:47:42 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:42 --> Total execution time: 0.0400
INFO - 2025-05-15 11:47:43 --> Config Class Initialized
INFO - 2025-05-15 11:47:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:47:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:47:43 --> Utf8 Class Initialized
INFO - 2025-05-15 11:47:43 --> URI Class Initialized
INFO - 2025-05-15 11:47:43 --> Router Class Initialized
INFO - 2025-05-15 11:47:43 --> Output Class Initialized
INFO - 2025-05-15 11:47:43 --> Security Class Initialized
DEBUG - 2025-05-15 11:47:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:47:43 --> Input Class Initialized
INFO - 2025-05-15 11:47:43 --> Language Class Initialized
INFO - 2025-05-15 11:47:43 --> Loader Class Initialized
INFO - 2025-05-15 11:47:43 --> Helper loaded: url_helper
INFO - 2025-05-15 11:47:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:47:43 --> Helper loaded: form_helper
INFO - 2025-05-15 11:47:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:47:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:47:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:47:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:47:43 --> Form Validation Class Initialized
INFO - 2025-05-15 11:47:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:47:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:47:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:47:43 --> Controller Class Initialized
INFO - 2025-05-15 11:47:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:47:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:47:43 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:47:43 --> Final output sent to browser
DEBUG - 2025-05-15 11:47:43 --> Total execution time: 0.0415
INFO - 2025-05-15 11:48:11 --> Config Class Initialized
INFO - 2025-05-15 11:48:11 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:48:11 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:48:11 --> Utf8 Class Initialized
INFO - 2025-05-15 11:48:11 --> URI Class Initialized
INFO - 2025-05-15 11:48:11 --> Router Class Initialized
INFO - 2025-05-15 11:48:11 --> Output Class Initialized
INFO - 2025-05-15 11:48:11 --> Security Class Initialized
DEBUG - 2025-05-15 11:48:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:48:11 --> Input Class Initialized
INFO - 2025-05-15 11:48:11 --> Language Class Initialized
INFO - 2025-05-15 11:48:11 --> Loader Class Initialized
INFO - 2025-05-15 11:48:11 --> Helper loaded: url_helper
INFO - 2025-05-15 11:48:11 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:48:11 --> Helper loaded: form_helper
INFO - 2025-05-15 11:48:11 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:48:11 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:48:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:48:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:48:11 --> Form Validation Class Initialized
INFO - 2025-05-15 11:48:11 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:48:11 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:48:11 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:48:11 --> Controller Class Initialized
INFO - 2025-05-15 11:48:11 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:48:11 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:48:11 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:48:11 --> Final output sent to browser
DEBUG - 2025-05-15 11:48:11 --> Total execution time: 0.0233
INFO - 2025-05-15 11:48:36 --> Config Class Initialized
INFO - 2025-05-15 11:48:36 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:48:36 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:48:36 --> Utf8 Class Initialized
INFO - 2025-05-15 11:48:36 --> URI Class Initialized
INFO - 2025-05-15 11:48:36 --> Router Class Initialized
INFO - 2025-05-15 11:48:36 --> Output Class Initialized
INFO - 2025-05-15 11:48:36 --> Security Class Initialized
DEBUG - 2025-05-15 11:48:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:48:36 --> Input Class Initialized
INFO - 2025-05-15 11:48:36 --> Language Class Initialized
INFO - 2025-05-15 11:48:36 --> Loader Class Initialized
INFO - 2025-05-15 11:48:36 --> Helper loaded: url_helper
INFO - 2025-05-15 11:48:36 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:48:36 --> Helper loaded: form_helper
INFO - 2025-05-15 11:48:36 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:48:36 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:48:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:48:36 --> Form Validation Class Initialized
INFO - 2025-05-15 11:48:36 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:48:36 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:48:36 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:48:36 --> Controller Class Initialized
INFO - 2025-05-15 11:48:36 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:48:36 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:48:36 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:48:36 --> Final output sent to browser
DEBUG - 2025-05-15 11:48:36 --> Total execution time: 0.0158
INFO - 2025-05-15 11:48:47 --> Config Class Initialized
INFO - 2025-05-15 11:48:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:48:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:48:47 --> Utf8 Class Initialized
INFO - 2025-05-15 11:48:47 --> URI Class Initialized
INFO - 2025-05-15 11:48:47 --> Router Class Initialized
INFO - 2025-05-15 11:48:47 --> Output Class Initialized
INFO - 2025-05-15 11:48:47 --> Security Class Initialized
DEBUG - 2025-05-15 11:48:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:48:47 --> Input Class Initialized
INFO - 2025-05-15 11:48:47 --> Language Class Initialized
INFO - 2025-05-15 11:48:47 --> Loader Class Initialized
INFO - 2025-05-15 11:48:47 --> Helper loaded: url_helper
INFO - 2025-05-15 11:48:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:48:47 --> Helper loaded: form_helper
INFO - 2025-05-15 11:48:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:48:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:48:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:48:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:48:47 --> Form Validation Class Initialized
INFO - 2025-05-15 11:48:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:48:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:48:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:48:47 --> Controller Class Initialized
INFO - 2025-05-15 11:48:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:48:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:48:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:48:47 --> Final output sent to browser
DEBUG - 2025-05-15 11:48:47 --> Total execution time: 0.0132
INFO - 2025-05-15 11:49:03 --> Config Class Initialized
INFO - 2025-05-15 11:49:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:49:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:49:03 --> Utf8 Class Initialized
INFO - 2025-05-15 11:49:03 --> URI Class Initialized
INFO - 2025-05-15 11:49:03 --> Router Class Initialized
INFO - 2025-05-15 11:49:03 --> Output Class Initialized
INFO - 2025-05-15 11:49:03 --> Security Class Initialized
DEBUG - 2025-05-15 11:49:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:49:03 --> Input Class Initialized
INFO - 2025-05-15 11:49:03 --> Language Class Initialized
INFO - 2025-05-15 11:49:03 --> Loader Class Initialized
INFO - 2025-05-15 11:49:03 --> Helper loaded: url_helper
INFO - 2025-05-15 11:49:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:49:03 --> Helper loaded: form_helper
INFO - 2025-05-15 11:49:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:49:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:49:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:49:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:49:03 --> Form Validation Class Initialized
INFO - 2025-05-15 11:49:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:49:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:49:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:49:03 --> Controller Class Initialized
INFO - 2025-05-15 11:49:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:49:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:49:03 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:49:03 --> Final output sent to browser
DEBUG - 2025-05-15 11:49:03 --> Total execution time: 0.0200
INFO - 2025-05-15 11:49:18 --> Config Class Initialized
INFO - 2025-05-15 11:49:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:49:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:49:18 --> Utf8 Class Initialized
INFO - 2025-05-15 11:49:18 --> URI Class Initialized
INFO - 2025-05-15 11:49:18 --> Router Class Initialized
INFO - 2025-05-15 11:49:18 --> Output Class Initialized
INFO - 2025-05-15 11:49:18 --> Security Class Initialized
DEBUG - 2025-05-15 11:49:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:49:18 --> Input Class Initialized
INFO - 2025-05-15 11:49:18 --> Language Class Initialized
INFO - 2025-05-15 11:49:18 --> Loader Class Initialized
INFO - 2025-05-15 11:49:18 --> Helper loaded: url_helper
INFO - 2025-05-15 11:49:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:49:18 --> Helper loaded: form_helper
INFO - 2025-05-15 11:49:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:49:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:49:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:49:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:49:18 --> Form Validation Class Initialized
INFO - 2025-05-15 11:49:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:49:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:49:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:49:18 --> Controller Class Initialized
INFO - 2025-05-15 11:49:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:49:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:49:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:49:18 --> Final output sent to browser
DEBUG - 2025-05-15 11:49:18 --> Total execution time: 0.0099
INFO - 2025-05-15 11:49:22 --> Config Class Initialized
INFO - 2025-05-15 11:49:22 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:49:22 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:49:22 --> Utf8 Class Initialized
INFO - 2025-05-15 11:49:22 --> URI Class Initialized
INFO - 2025-05-15 11:49:22 --> Router Class Initialized
INFO - 2025-05-15 11:49:22 --> Output Class Initialized
INFO - 2025-05-15 11:49:22 --> Security Class Initialized
DEBUG - 2025-05-15 11:49:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:49:22 --> Input Class Initialized
INFO - 2025-05-15 11:49:22 --> Language Class Initialized
INFO - 2025-05-15 11:49:22 --> Loader Class Initialized
INFO - 2025-05-15 11:49:22 --> Helper loaded: url_helper
INFO - 2025-05-15 11:49:22 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:49:22 --> Helper loaded: form_helper
INFO - 2025-05-15 11:49:22 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:49:22 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:49:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:49:22 --> Form Validation Class Initialized
INFO - 2025-05-15 11:49:22 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:49:22 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:49:22 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:49:22 --> Controller Class Initialized
INFO - 2025-05-15 11:49:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:49:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:49:22 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:49:22 --> Final output sent to browser
DEBUG - 2025-05-15 11:49:22 --> Total execution time: 0.0419
INFO - 2025-05-15 11:49:53 --> Config Class Initialized
INFO - 2025-05-15 11:49:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:49:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:49:53 --> Utf8 Class Initialized
INFO - 2025-05-15 11:49:53 --> URI Class Initialized
INFO - 2025-05-15 11:49:53 --> Router Class Initialized
INFO - 2025-05-15 11:49:53 --> Output Class Initialized
INFO - 2025-05-15 11:49:53 --> Security Class Initialized
DEBUG - 2025-05-15 11:49:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:49:53 --> Input Class Initialized
INFO - 2025-05-15 11:49:53 --> Language Class Initialized
INFO - 2025-05-15 11:49:53 --> Loader Class Initialized
INFO - 2025-05-15 11:49:53 --> Helper loaded: url_helper
INFO - 2025-05-15 11:49:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:49:53 --> Helper loaded: form_helper
INFO - 2025-05-15 11:49:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:49:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:49:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:49:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:49:53 --> Form Validation Class Initialized
INFO - 2025-05-15 11:49:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:49:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:49:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:49:53 --> Controller Class Initialized
INFO - 2025-05-15 11:49:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:49:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:49:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:49:53 --> Final output sent to browser
DEBUG - 2025-05-15 11:49:53 --> Total execution time: 0.0177
INFO - 2025-05-15 11:50:06 --> Config Class Initialized
INFO - 2025-05-15 11:50:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:50:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:50:06 --> Utf8 Class Initialized
INFO - 2025-05-15 11:50:06 --> URI Class Initialized
INFO - 2025-05-15 11:50:06 --> Router Class Initialized
INFO - 2025-05-15 11:50:06 --> Output Class Initialized
INFO - 2025-05-15 11:50:06 --> Security Class Initialized
DEBUG - 2025-05-15 11:50:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:50:06 --> Input Class Initialized
INFO - 2025-05-15 11:50:06 --> Language Class Initialized
INFO - 2025-05-15 11:50:06 --> Loader Class Initialized
INFO - 2025-05-15 11:50:06 --> Helper loaded: url_helper
INFO - 2025-05-15 11:50:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:50:06 --> Helper loaded: form_helper
INFO - 2025-05-15 11:50:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:50:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:50:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:50:06 --> Form Validation Class Initialized
INFO - 2025-05-15 11:50:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:50:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:50:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:50:06 --> Controller Class Initialized
INFO - 2025-05-15 11:50:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:50:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:50:06 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:50:06 --> Final output sent to browser
DEBUG - 2025-05-15 11:50:06 --> Total execution time: 0.0220
INFO - 2025-05-15 11:50:24 --> Config Class Initialized
INFO - 2025-05-15 11:50:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:50:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:50:24 --> Utf8 Class Initialized
INFO - 2025-05-15 11:50:24 --> URI Class Initialized
INFO - 2025-05-15 11:50:24 --> Router Class Initialized
INFO - 2025-05-15 11:50:24 --> Output Class Initialized
INFO - 2025-05-15 11:50:24 --> Security Class Initialized
DEBUG - 2025-05-15 11:50:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:50:24 --> Input Class Initialized
INFO - 2025-05-15 11:50:24 --> Language Class Initialized
INFO - 2025-05-15 11:50:24 --> Loader Class Initialized
INFO - 2025-05-15 11:50:24 --> Helper loaded: url_helper
INFO - 2025-05-15 11:50:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:50:24 --> Helper loaded: form_helper
INFO - 2025-05-15 11:50:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:50:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:50:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:50:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:50:24 --> Form Validation Class Initialized
INFO - 2025-05-15 11:50:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:50:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:50:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:50:24 --> Controller Class Initialized
INFO - 2025-05-15 11:50:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:50:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:50:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:50:24 --> Final output sent to browser
DEBUG - 2025-05-15 11:50:24 --> Total execution time: 0.0168
INFO - 2025-05-15 11:50:29 --> Config Class Initialized
INFO - 2025-05-15 11:50:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:50:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:50:29 --> Utf8 Class Initialized
INFO - 2025-05-15 11:50:29 --> URI Class Initialized
INFO - 2025-05-15 11:50:29 --> Router Class Initialized
INFO - 2025-05-15 11:50:29 --> Output Class Initialized
INFO - 2025-05-15 11:50:29 --> Security Class Initialized
DEBUG - 2025-05-15 11:50:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:50:29 --> Input Class Initialized
INFO - 2025-05-15 11:50:29 --> Language Class Initialized
INFO - 2025-05-15 11:50:29 --> Loader Class Initialized
INFO - 2025-05-15 11:50:29 --> Helper loaded: url_helper
INFO - 2025-05-15 11:50:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:50:29 --> Helper loaded: form_helper
INFO - 2025-05-15 11:50:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:50:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:50:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:50:29 --> Form Validation Class Initialized
INFO - 2025-05-15 11:50:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:50:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:50:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:50:29 --> Controller Class Initialized
INFO - 2025-05-15 11:50:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:50:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:50:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:50:29 --> Final output sent to browser
DEBUG - 2025-05-15 11:50:29 --> Total execution time: 0.0389
INFO - 2025-05-15 11:50:37 --> Config Class Initialized
INFO - 2025-05-15 11:50:37 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:50:37 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:50:37 --> Utf8 Class Initialized
INFO - 2025-05-15 11:50:37 --> URI Class Initialized
INFO - 2025-05-15 11:50:37 --> Router Class Initialized
INFO - 2025-05-15 11:50:37 --> Output Class Initialized
INFO - 2025-05-15 11:50:37 --> Security Class Initialized
DEBUG - 2025-05-15 11:50:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:50:37 --> Input Class Initialized
INFO - 2025-05-15 11:50:37 --> Language Class Initialized
INFO - 2025-05-15 11:50:37 --> Loader Class Initialized
INFO - 2025-05-15 11:50:37 --> Helper loaded: url_helper
INFO - 2025-05-15 11:50:37 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:50:37 --> Helper loaded: form_helper
INFO - 2025-05-15 11:50:37 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:50:37 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:50:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:50:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:50:37 --> Form Validation Class Initialized
INFO - 2025-05-15 11:50:37 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:50:37 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:50:37 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:50:37 --> Controller Class Initialized
INFO - 2025-05-15 11:50:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:50:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:50:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:50:37 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:50:37 --> Final output sent to browser
DEBUG - 2025-05-15 11:50:37 --> Total execution time: 0.0399
INFO - 2025-05-15 11:50:47 --> Config Class Initialized
INFO - 2025-05-15 11:50:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:50:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:50:47 --> Utf8 Class Initialized
INFO - 2025-05-15 11:50:47 --> URI Class Initialized
INFO - 2025-05-15 11:50:47 --> Router Class Initialized
INFO - 2025-05-15 11:50:47 --> Output Class Initialized
INFO - 2025-05-15 11:50:47 --> Security Class Initialized
DEBUG - 2025-05-15 11:50:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:50:47 --> Input Class Initialized
INFO - 2025-05-15 11:50:47 --> Language Class Initialized
INFO - 2025-05-15 11:50:47 --> Loader Class Initialized
INFO - 2025-05-15 11:50:47 --> Helper loaded: url_helper
INFO - 2025-05-15 11:50:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:50:47 --> Helper loaded: form_helper
INFO - 2025-05-15 11:50:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:50:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:50:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:50:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:50:47 --> Form Validation Class Initialized
INFO - 2025-05-15 11:50:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:50:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:50:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:50:47 --> Controller Class Initialized
INFO - 2025-05-15 11:50:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:50:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:50:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:50:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:50:47 --> Final output sent to browser
DEBUG - 2025-05-15 11:50:47 --> Total execution time: 0.0093
INFO - 2025-05-15 11:50:48 --> Config Class Initialized
INFO - 2025-05-15 11:50:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:50:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:50:48 --> Utf8 Class Initialized
INFO - 2025-05-15 11:50:48 --> URI Class Initialized
INFO - 2025-05-15 11:50:48 --> Router Class Initialized
INFO - 2025-05-15 11:50:48 --> Output Class Initialized
INFO - 2025-05-15 11:50:48 --> Security Class Initialized
DEBUG - 2025-05-15 11:50:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:50:48 --> Input Class Initialized
INFO - 2025-05-15 11:50:48 --> Language Class Initialized
INFO - 2025-05-15 11:50:48 --> Loader Class Initialized
INFO - 2025-05-15 11:50:48 --> Helper loaded: url_helper
INFO - 2025-05-15 11:50:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:50:48 --> Helper loaded: form_helper
INFO - 2025-05-15 11:50:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:50:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:50:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:50:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:50:48 --> Form Validation Class Initialized
INFO - 2025-05-15 11:50:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:50:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:50:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:50:48 --> Controller Class Initialized
INFO - 2025-05-15 11:50:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:50:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:50:48 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:50:48 --> Final output sent to browser
DEBUG - 2025-05-15 11:50:48 --> Total execution time: 0.0342
INFO - 2025-05-15 11:51:20 --> Config Class Initialized
INFO - 2025-05-15 11:51:20 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:51:20 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:51:20 --> Utf8 Class Initialized
INFO - 2025-05-15 11:51:20 --> URI Class Initialized
INFO - 2025-05-15 11:51:20 --> Router Class Initialized
INFO - 2025-05-15 11:51:20 --> Output Class Initialized
INFO - 2025-05-15 11:51:20 --> Security Class Initialized
DEBUG - 2025-05-15 11:51:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:51:20 --> Input Class Initialized
INFO - 2025-05-15 11:51:20 --> Language Class Initialized
INFO - 2025-05-15 11:51:20 --> Loader Class Initialized
INFO - 2025-05-15 11:51:20 --> Helper loaded: url_helper
INFO - 2025-05-15 11:51:20 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:51:20 --> Helper loaded: form_helper
INFO - 2025-05-15 11:51:20 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:51:20 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:51:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:51:20 --> Form Validation Class Initialized
INFO - 2025-05-15 11:51:20 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:51:20 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:51:20 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:51:20 --> Controller Class Initialized
INFO - 2025-05-15 11:51:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:51:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:51:20 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:51:20 --> Final output sent to browser
DEBUG - 2025-05-15 11:51:20 --> Total execution time: 0.0122
INFO - 2025-05-15 11:51:26 --> Config Class Initialized
INFO - 2025-05-15 11:51:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:51:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:51:26 --> Utf8 Class Initialized
INFO - 2025-05-15 11:51:26 --> URI Class Initialized
INFO - 2025-05-15 11:51:26 --> Router Class Initialized
INFO - 2025-05-15 11:51:26 --> Output Class Initialized
INFO - 2025-05-15 11:51:26 --> Security Class Initialized
DEBUG - 2025-05-15 11:51:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:51:26 --> Input Class Initialized
INFO - 2025-05-15 11:51:26 --> Language Class Initialized
INFO - 2025-05-15 11:51:26 --> Loader Class Initialized
INFO - 2025-05-15 11:51:26 --> Helper loaded: url_helper
INFO - 2025-05-15 11:51:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:51:26 --> Helper loaded: form_helper
INFO - 2025-05-15 11:51:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:51:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:51:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:51:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:51:26 --> Form Validation Class Initialized
INFO - 2025-05-15 11:51:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:51:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:51:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:51:26 --> Controller Class Initialized
INFO - 2025-05-15 11:51:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:51:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:51:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:51:26 --> Final output sent to browser
DEBUG - 2025-05-15 11:51:26 --> Total execution time: 0.0397
INFO - 2025-05-15 11:51:31 --> Config Class Initialized
INFO - 2025-05-15 11:51:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:51:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:51:31 --> Utf8 Class Initialized
INFO - 2025-05-15 11:51:31 --> URI Class Initialized
INFO - 2025-05-15 11:51:31 --> Router Class Initialized
INFO - 2025-05-15 11:51:31 --> Output Class Initialized
INFO - 2025-05-15 11:51:31 --> Security Class Initialized
DEBUG - 2025-05-15 11:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:51:31 --> Input Class Initialized
INFO - 2025-05-15 11:51:31 --> Language Class Initialized
INFO - 2025-05-15 11:51:31 --> Loader Class Initialized
INFO - 2025-05-15 11:51:31 --> Helper loaded: url_helper
INFO - 2025-05-15 11:51:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:51:31 --> Helper loaded: form_helper
INFO - 2025-05-15 11:51:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:51:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:51:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:51:31 --> Form Validation Class Initialized
INFO - 2025-05-15 11:51:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:51:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:51:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:51:31 --> Controller Class Initialized
INFO - 2025-05-15 11:51:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:51:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:51:31 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:51:31 --> Final output sent to browser
DEBUG - 2025-05-15 11:51:31 --> Total execution time: 0.0196
INFO - 2025-05-15 11:52:41 --> Config Class Initialized
INFO - 2025-05-15 11:52:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:41 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:41 --> URI Class Initialized
INFO - 2025-05-15 11:52:41 --> Router Class Initialized
INFO - 2025-05-15 11:52:41 --> Output Class Initialized
INFO - 2025-05-15 11:52:41 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:41 --> Input Class Initialized
INFO - 2025-05-15 11:52:41 --> Language Class Initialized
INFO - 2025-05-15 11:52:41 --> Loader Class Initialized
INFO - 2025-05-15 11:52:41 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:41 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:41 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:41 --> Controller Class Initialized
INFO - 2025-05-15 11:52:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:52:41 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:41 --> Total execution time: 0.0410
INFO - 2025-05-15 11:52:42 --> Config Class Initialized
INFO - 2025-05-15 11:52:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:42 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:42 --> URI Class Initialized
INFO - 2025-05-15 11:52:42 --> Router Class Initialized
INFO - 2025-05-15 11:52:42 --> Output Class Initialized
INFO - 2025-05-15 11:52:42 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:42 --> Input Class Initialized
INFO - 2025-05-15 11:52:42 --> Language Class Initialized
INFO - 2025-05-15 11:52:42 --> Loader Class Initialized
INFO - 2025-05-15 11:52:42 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:42 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:42 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:42 --> Controller Class Initialized
INFO - 2025-05-15 11:52:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:52:42 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:42 --> Total execution time: 0.0377
INFO - 2025-05-15 11:52:43 --> Config Class Initialized
INFO - 2025-05-15 11:52:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:43 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:43 --> URI Class Initialized
INFO - 2025-05-15 11:52:43 --> Router Class Initialized
INFO - 2025-05-15 11:52:43 --> Output Class Initialized
INFO - 2025-05-15 11:52:43 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:43 --> Input Class Initialized
INFO - 2025-05-15 11:52:43 --> Language Class Initialized
INFO - 2025-05-15 11:52:43 --> Loader Class Initialized
INFO - 2025-05-15 11:52:43 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:43 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:43 --> Controller Class Initialized
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:52:43 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:43 --> Total execution time: 0.0379
INFO - 2025-05-15 11:52:43 --> Config Class Initialized
INFO - 2025-05-15 11:52:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:43 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:43 --> URI Class Initialized
INFO - 2025-05-15 11:52:43 --> Router Class Initialized
INFO - 2025-05-15 11:52:43 --> Output Class Initialized
INFO - 2025-05-15 11:52:43 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:43 --> Input Class Initialized
INFO - 2025-05-15 11:52:43 --> Language Class Initialized
INFO - 2025-05-15 11:52:43 --> Loader Class Initialized
INFO - 2025-05-15 11:52:43 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:43 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:43 --> Controller Class Initialized
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:52:43 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:43 --> Total execution time: 0.0088
INFO - 2025-05-15 11:52:43 --> Config Class Initialized
INFO - 2025-05-15 11:52:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:43 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:43 --> URI Class Initialized
INFO - 2025-05-15 11:52:43 --> Router Class Initialized
INFO - 2025-05-15 11:52:43 --> Output Class Initialized
INFO - 2025-05-15 11:52:43 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:43 --> Input Class Initialized
INFO - 2025-05-15 11:52:43 --> Language Class Initialized
INFO - 2025-05-15 11:52:43 --> Loader Class Initialized
INFO - 2025-05-15 11:52:43 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:43 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:43 --> Controller Class Initialized
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:43 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:52:43 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:43 --> Total execution time: 0.0266
INFO - 2025-05-15 11:52:50 --> Config Class Initialized
INFO - 2025-05-15 11:52:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:50 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:50 --> URI Class Initialized
INFO - 2025-05-15 11:52:50 --> Router Class Initialized
INFO - 2025-05-15 11:52:50 --> Output Class Initialized
INFO - 2025-05-15 11:52:50 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:50 --> Input Class Initialized
INFO - 2025-05-15 11:52:50 --> Language Class Initialized
INFO - 2025-05-15 11:52:50 --> Loader Class Initialized
INFO - 2025-05-15 11:52:50 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:50 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:50 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:50 --> Controller Class Initialized
INFO - 2025-05-15 11:52:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:50 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:52:50 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:50 --> Total execution time: 0.0185
INFO - 2025-05-15 11:52:52 --> Config Class Initialized
INFO - 2025-05-15 11:52:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:52 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:52 --> URI Class Initialized
INFO - 2025-05-15 11:52:52 --> Router Class Initialized
INFO - 2025-05-15 11:52:52 --> Output Class Initialized
INFO - 2025-05-15 11:52:52 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:52 --> Input Class Initialized
INFO - 2025-05-15 11:52:52 --> Language Class Initialized
INFO - 2025-05-15 11:52:52 --> Loader Class Initialized
INFO - 2025-05-15 11:52:52 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:52 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:52 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:52 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:52 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:52 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:52 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:52 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:52 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:52 --> Controller Class Initialized
INFO - 2025-05-15 11:52:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:52:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:52 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:52:52 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:52 --> Total execution time: 0.0399
INFO - 2025-05-15 11:52:53 --> Config Class Initialized
INFO - 2025-05-15 11:52:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:52:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:52:53 --> Utf8 Class Initialized
INFO - 2025-05-15 11:52:53 --> URI Class Initialized
INFO - 2025-05-15 11:52:53 --> Router Class Initialized
INFO - 2025-05-15 11:52:53 --> Output Class Initialized
INFO - 2025-05-15 11:52:53 --> Security Class Initialized
DEBUG - 2025-05-15 11:52:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:52:53 --> Input Class Initialized
INFO - 2025-05-15 11:52:53 --> Language Class Initialized
INFO - 2025-05-15 11:52:53 --> Loader Class Initialized
INFO - 2025-05-15 11:52:53 --> Helper loaded: url_helper
INFO - 2025-05-15 11:52:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:52:53 --> Helper loaded: form_helper
INFO - 2025-05-15 11:52:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:52:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:52:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:52:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:52:53 --> Form Validation Class Initialized
INFO - 2025-05-15 11:52:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:52:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:52:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:52:53 --> Controller Class Initialized
INFO - 2025-05-15 11:52:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:52:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:52:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:52:53 --> Final output sent to browser
DEBUG - 2025-05-15 11:52:53 --> Total execution time: 0.0329
INFO - 2025-05-15 11:53:55 --> Config Class Initialized
INFO - 2025-05-15 11:53:55 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:53:55 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:53:55 --> Utf8 Class Initialized
INFO - 2025-05-15 11:53:55 --> URI Class Initialized
INFO - 2025-05-15 11:53:55 --> Router Class Initialized
INFO - 2025-05-15 11:53:55 --> Output Class Initialized
INFO - 2025-05-15 11:53:55 --> Security Class Initialized
DEBUG - 2025-05-15 11:53:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:53:55 --> Input Class Initialized
INFO - 2025-05-15 11:53:55 --> Language Class Initialized
INFO - 2025-05-15 11:53:55 --> Loader Class Initialized
INFO - 2025-05-15 11:53:55 --> Helper loaded: url_helper
INFO - 2025-05-15 11:53:55 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:53:55 --> Helper loaded: form_helper
INFO - 2025-05-15 11:53:55 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:53:55 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:53:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:53:55 --> Form Validation Class Initialized
INFO - 2025-05-15 11:53:55 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:53:55 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:53:55 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:53:55 --> Controller Class Initialized
INFO - 2025-05-15 11:53:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:53:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:53:55 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:53:55 --> Final output sent to browser
DEBUG - 2025-05-15 11:53:55 --> Total execution time: 0.0214
INFO - 2025-05-15 11:53:56 --> Config Class Initialized
INFO - 2025-05-15 11:53:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:53:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:53:56 --> Utf8 Class Initialized
INFO - 2025-05-15 11:53:56 --> URI Class Initialized
INFO - 2025-05-15 11:53:56 --> Router Class Initialized
INFO - 2025-05-15 11:53:56 --> Output Class Initialized
INFO - 2025-05-15 11:53:56 --> Security Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:53:56 --> Input Class Initialized
INFO - 2025-05-15 11:53:56 --> Language Class Initialized
INFO - 2025-05-15 11:53:56 --> Loader Class Initialized
INFO - 2025-05-15 11:53:56 --> Helper loaded: url_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: form_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:53:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:53:56 --> Form Validation Class Initialized
INFO - 2025-05-15 11:53:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:53:56 --> Controller Class Initialized
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:53:56 --> Final output sent to browser
DEBUG - 2025-05-15 11:53:56 --> Total execution time: 0.0367
INFO - 2025-05-15 11:53:56 --> Config Class Initialized
INFO - 2025-05-15 11:53:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:53:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:53:56 --> Utf8 Class Initialized
INFO - 2025-05-15 11:53:56 --> URI Class Initialized
INFO - 2025-05-15 11:53:56 --> Router Class Initialized
INFO - 2025-05-15 11:53:56 --> Output Class Initialized
INFO - 2025-05-15 11:53:56 --> Security Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:53:56 --> Input Class Initialized
INFO - 2025-05-15 11:53:56 --> Language Class Initialized
INFO - 2025-05-15 11:53:56 --> Loader Class Initialized
INFO - 2025-05-15 11:53:56 --> Helper loaded: url_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: form_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:53:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:53:56 --> Form Validation Class Initialized
INFO - 2025-05-15 11:53:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:53:56 --> Controller Class Initialized
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:53:56 --> Final output sent to browser
DEBUG - 2025-05-15 11:53:56 --> Total execution time: 0.0412
INFO - 2025-05-15 11:53:56 --> Config Class Initialized
INFO - 2025-05-15 11:53:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:53:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:53:56 --> Utf8 Class Initialized
INFO - 2025-05-15 11:53:56 --> URI Class Initialized
INFO - 2025-05-15 11:53:56 --> Router Class Initialized
INFO - 2025-05-15 11:53:56 --> Output Class Initialized
INFO - 2025-05-15 11:53:56 --> Security Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:53:56 --> Input Class Initialized
INFO - 2025-05-15 11:53:56 --> Language Class Initialized
INFO - 2025-05-15 11:53:56 --> Loader Class Initialized
INFO - 2025-05-15 11:53:56 --> Helper loaded: url_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: form_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:53:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:53:56 --> Form Validation Class Initialized
INFO - 2025-05-15 11:53:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:53:56 --> Controller Class Initialized
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:53:56 --> Final output sent to browser
DEBUG - 2025-05-15 11:53:56 --> Total execution time: 0.0369
INFO - 2025-05-15 11:53:56 --> Config Class Initialized
INFO - 2025-05-15 11:53:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:53:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:53:56 --> Utf8 Class Initialized
INFO - 2025-05-15 11:53:56 --> URI Class Initialized
INFO - 2025-05-15 11:53:56 --> Router Class Initialized
INFO - 2025-05-15 11:53:56 --> Output Class Initialized
INFO - 2025-05-15 11:53:56 --> Security Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:53:56 --> Input Class Initialized
INFO - 2025-05-15 11:53:56 --> Language Class Initialized
INFO - 2025-05-15 11:53:56 --> Loader Class Initialized
INFO - 2025-05-15 11:53:56 --> Helper loaded: url_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: form_helper
INFO - 2025-05-15 11:53:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:53:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:53:56 --> Form Validation Class Initialized
INFO - 2025-05-15 11:53:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:53:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:53:56 --> Controller Class Initialized
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:53:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:53:56 --> Final output sent to browser
DEBUG - 2025-05-15 11:53:56 --> Total execution time: 0.0341
INFO - 2025-05-15 11:54:01 --> Config Class Initialized
INFO - 2025-05-15 11:54:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:54:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:54:01 --> Utf8 Class Initialized
INFO - 2025-05-15 11:54:01 --> URI Class Initialized
INFO - 2025-05-15 11:54:01 --> Router Class Initialized
INFO - 2025-05-15 11:54:01 --> Output Class Initialized
INFO - 2025-05-15 11:54:01 --> Security Class Initialized
DEBUG - 2025-05-15 11:54:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:54:01 --> Input Class Initialized
INFO - 2025-05-15 11:54:01 --> Language Class Initialized
INFO - 2025-05-15 11:54:01 --> Loader Class Initialized
INFO - 2025-05-15 11:54:01 --> Helper loaded: url_helper
INFO - 2025-05-15 11:54:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:54:01 --> Helper loaded: form_helper
INFO - 2025-05-15 11:54:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:54:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:54:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:54:01 --> Form Validation Class Initialized
INFO - 2025-05-15 11:54:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:54:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:54:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:54:01 --> Controller Class Initialized
INFO - 2025-05-15 11:54:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:54:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:54:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:54:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:54:01 --> Final output sent to browser
DEBUG - 2025-05-15 11:54:01 --> Total execution time: 0.0096
INFO - 2025-05-15 11:54:03 --> Config Class Initialized
INFO - 2025-05-15 11:54:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:54:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:54:03 --> Utf8 Class Initialized
INFO - 2025-05-15 11:54:03 --> URI Class Initialized
INFO - 2025-05-15 11:54:03 --> Router Class Initialized
INFO - 2025-05-15 11:54:03 --> Output Class Initialized
INFO - 2025-05-15 11:54:03 --> Security Class Initialized
DEBUG - 2025-05-15 11:54:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:54:03 --> Input Class Initialized
INFO - 2025-05-15 11:54:03 --> Language Class Initialized
INFO - 2025-05-15 11:54:03 --> Loader Class Initialized
INFO - 2025-05-15 11:54:03 --> Helper loaded: url_helper
INFO - 2025-05-15 11:54:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:54:03 --> Helper loaded: form_helper
INFO - 2025-05-15 11:54:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:54:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:54:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:54:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:54:03 --> Form Validation Class Initialized
INFO - 2025-05-15 11:54:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:54:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:54:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:54:03 --> Controller Class Initialized
INFO - 2025-05-15 11:54:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:54:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:54:03 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:54:03 --> Final output sent to browser
DEBUG - 2025-05-15 11:54:03 --> Total execution time: 0.0257
INFO - 2025-05-15 11:54:06 --> Config Class Initialized
INFO - 2025-05-15 11:54:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:54:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:54:06 --> Utf8 Class Initialized
INFO - 2025-05-15 11:54:06 --> URI Class Initialized
INFO - 2025-05-15 11:54:06 --> Router Class Initialized
INFO - 2025-05-15 11:54:06 --> Output Class Initialized
INFO - 2025-05-15 11:54:06 --> Security Class Initialized
DEBUG - 2025-05-15 11:54:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:54:06 --> Input Class Initialized
INFO - 2025-05-15 11:54:06 --> Language Class Initialized
INFO - 2025-05-15 11:54:06 --> Loader Class Initialized
INFO - 2025-05-15 11:54:06 --> Helper loaded: url_helper
INFO - 2025-05-15 11:54:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:54:06 --> Helper loaded: form_helper
INFO - 2025-05-15 11:54:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:54:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:54:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:54:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:54:06 --> Form Validation Class Initialized
INFO - 2025-05-15 11:54:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:54:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:54:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:54:06 --> Controller Class Initialized
INFO - 2025-05-15 11:54:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:54:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:54:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:54:06 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:54:06 --> Final output sent to browser
DEBUG - 2025-05-15 11:54:06 --> Total execution time: 0.0136
INFO - 2025-05-15 11:54:08 --> Config Class Initialized
INFO - 2025-05-15 11:54:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:54:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:54:08 --> Utf8 Class Initialized
INFO - 2025-05-15 11:54:08 --> URI Class Initialized
INFO - 2025-05-15 11:54:08 --> Router Class Initialized
INFO - 2025-05-15 11:54:08 --> Output Class Initialized
INFO - 2025-05-15 11:54:08 --> Security Class Initialized
DEBUG - 2025-05-15 11:54:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:54:08 --> Input Class Initialized
INFO - 2025-05-15 11:54:08 --> Language Class Initialized
INFO - 2025-05-15 11:54:08 --> Loader Class Initialized
INFO - 2025-05-15 11:54:08 --> Helper loaded: url_helper
INFO - 2025-05-15 11:54:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:54:08 --> Helper loaded: form_helper
INFO - 2025-05-15 11:54:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:54:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:54:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:54:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:54:08 --> Form Validation Class Initialized
INFO - 2025-05-15 11:54:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:54:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:54:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:54:08 --> Controller Class Initialized
INFO - 2025-05-15 11:54:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:54:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:54:08 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:54:08 --> Final output sent to browser
DEBUG - 2025-05-15 11:54:08 --> Total execution time: 0.0313
INFO - 2025-05-15 11:54:20 --> Config Class Initialized
INFO - 2025-05-15 11:54:20 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:54:20 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:54:20 --> Utf8 Class Initialized
INFO - 2025-05-15 11:54:20 --> URI Class Initialized
INFO - 2025-05-15 11:54:20 --> Router Class Initialized
INFO - 2025-05-15 11:54:20 --> Output Class Initialized
INFO - 2025-05-15 11:54:20 --> Security Class Initialized
DEBUG - 2025-05-15 11:54:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:54:20 --> Input Class Initialized
INFO - 2025-05-15 11:54:20 --> Language Class Initialized
INFO - 2025-05-15 11:54:20 --> Loader Class Initialized
INFO - 2025-05-15 11:54:20 --> Helper loaded: url_helper
INFO - 2025-05-15 11:54:20 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:54:20 --> Helper loaded: form_helper
INFO - 2025-05-15 11:54:20 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:54:20 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:54:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:54:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:54:20 --> Form Validation Class Initialized
INFO - 2025-05-15 11:54:20 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:54:20 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:54:20 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:54:20 --> Controller Class Initialized
INFO - 2025-05-15 11:54:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:54:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 11:54:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:54:20 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 11:54:20 --> Final output sent to browser
DEBUG - 2025-05-15 11:54:20 --> Total execution time: 0.0098
INFO - 2025-05-15 11:54:21 --> Config Class Initialized
INFO - 2025-05-15 11:54:21 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:54:21 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:54:21 --> Utf8 Class Initialized
INFO - 2025-05-15 11:54:21 --> URI Class Initialized
INFO - 2025-05-15 11:54:21 --> Router Class Initialized
INFO - 2025-05-15 11:54:21 --> Output Class Initialized
INFO - 2025-05-15 11:54:21 --> Security Class Initialized
DEBUG - 2025-05-15 11:54:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:54:21 --> Input Class Initialized
INFO - 2025-05-15 11:54:21 --> Language Class Initialized
INFO - 2025-05-15 11:54:21 --> Loader Class Initialized
INFO - 2025-05-15 11:54:21 --> Helper loaded: url_helper
INFO - 2025-05-15 11:54:21 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:54:21 --> Helper loaded: form_helper
INFO - 2025-05-15 11:54:21 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:54:21 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:54:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:54:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:54:21 --> Form Validation Class Initialized
INFO - 2025-05-15 11:54:21 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:54:21 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:54:21 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:54:21 --> Controller Class Initialized
INFO - 2025-05-15 11:54:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:54:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:54:21 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:54:21 --> Final output sent to browser
DEBUG - 2025-05-15 11:54:21 --> Total execution time: 0.0385
INFO - 2025-05-15 11:55:02 --> Config Class Initialized
INFO - 2025-05-15 11:55:02 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:55:02 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:55:02 --> Utf8 Class Initialized
INFO - 2025-05-15 11:55:02 --> URI Class Initialized
INFO - 2025-05-15 11:55:02 --> Router Class Initialized
INFO - 2025-05-15 11:55:02 --> Output Class Initialized
INFO - 2025-05-15 11:55:02 --> Security Class Initialized
DEBUG - 2025-05-15 11:55:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:55:02 --> Input Class Initialized
INFO - 2025-05-15 11:55:02 --> Language Class Initialized
INFO - 2025-05-15 11:55:02 --> Loader Class Initialized
INFO - 2025-05-15 11:55:02 --> Helper loaded: url_helper
INFO - 2025-05-15 11:55:02 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:55:02 --> Helper loaded: form_helper
INFO - 2025-05-15 11:55:02 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:55:02 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:55:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:55:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:55:02 --> Form Validation Class Initialized
INFO - 2025-05-15 11:55:02 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:55:02 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:55:02 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:55:02 --> Controller Class Initialized
INFO - 2025-05-15 11:55:02 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:55:02 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:55:02 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 11:55:02 --> Final output sent to browser
DEBUG - 2025-05-15 11:55:02 --> Total execution time: 0.0239
INFO - 2025-05-15 11:55:05 --> Config Class Initialized
INFO - 2025-05-15 11:55:05 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:55:05 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:55:05 --> Utf8 Class Initialized
INFO - 2025-05-15 11:55:05 --> URI Class Initialized
INFO - 2025-05-15 11:55:05 --> Router Class Initialized
INFO - 2025-05-15 11:55:05 --> Output Class Initialized
INFO - 2025-05-15 11:55:05 --> Security Class Initialized
DEBUG - 2025-05-15 11:55:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:55:05 --> Input Class Initialized
INFO - 2025-05-15 11:55:05 --> Language Class Initialized
INFO - 2025-05-15 11:55:05 --> Loader Class Initialized
INFO - 2025-05-15 11:55:05 --> Helper loaded: url_helper
INFO - 2025-05-15 11:55:05 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:55:05 --> Helper loaded: form_helper
INFO - 2025-05-15 11:55:05 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:55:05 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:55:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:55:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:55:05 --> Form Validation Class Initialized
INFO - 2025-05-15 11:55:05 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:55:05 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:55:05 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:55:05 --> Controller Class Initialized
INFO - 2025-05-15 11:55:05 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:55:05 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:55:05 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:55:05 --> Final output sent to browser
DEBUG - 2025-05-15 11:55:05 --> Total execution time: 0.0340
INFO - 2025-05-15 11:55:06 --> Config Class Initialized
INFO - 2025-05-15 11:55:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 11:55:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 11:55:06 --> Utf8 Class Initialized
INFO - 2025-05-15 11:55:06 --> URI Class Initialized
INFO - 2025-05-15 11:55:06 --> Router Class Initialized
INFO - 2025-05-15 11:55:06 --> Output Class Initialized
INFO - 2025-05-15 11:55:06 --> Security Class Initialized
DEBUG - 2025-05-15 11:55:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 11:55:06 --> Input Class Initialized
INFO - 2025-05-15 11:55:06 --> Language Class Initialized
INFO - 2025-05-15 11:55:06 --> Loader Class Initialized
INFO - 2025-05-15 11:55:06 --> Helper loaded: url_helper
INFO - 2025-05-15 11:55:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 11:55:06 --> Helper loaded: form_helper
INFO - 2025-05-15 11:55:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 11:55:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 11:55:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 11:55:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 11:55:06 --> Form Validation Class Initialized
INFO - 2025-05-15 11:55:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 11:55:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 11:55:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 11:55:06 --> Controller Class Initialized
INFO - 2025-05-15 11:55:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 11:55:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 11:55:06 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 11:55:06 --> Final output sent to browser
DEBUG - 2025-05-15 11:55:06 --> Total execution time: 0.0409
INFO - 2025-05-15 13:00:26 --> Config Class Initialized
INFO - 2025-05-15 13:00:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:00:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:00:26 --> Utf8 Class Initialized
INFO - 2025-05-15 13:00:26 --> URI Class Initialized
INFO - 2025-05-15 13:00:26 --> Router Class Initialized
INFO - 2025-05-15 13:00:26 --> Output Class Initialized
INFO - 2025-05-15 13:00:26 --> Security Class Initialized
DEBUG - 2025-05-15 13:00:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:00:26 --> Input Class Initialized
INFO - 2025-05-15 13:00:26 --> Language Class Initialized
INFO - 2025-05-15 13:00:26 --> Loader Class Initialized
INFO - 2025-05-15 13:00:26 --> Helper loaded: url_helper
INFO - 2025-05-15 13:00:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:00:26 --> Helper loaded: form_helper
INFO - 2025-05-15 13:00:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:00:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:00:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:00:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:00:26 --> Form Validation Class Initialized
INFO - 2025-05-15 13:00:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:00:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:00:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:00:26 --> Controller Class Initialized
INFO - 2025-05-15 13:00:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:00:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:00:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:00:26 --> Final output sent to browser
DEBUG - 2025-05-15 13:00:26 --> Total execution time: 0.0096
INFO - 2025-05-15 13:02:18 --> Config Class Initialized
INFO - 2025-05-15 13:02:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:18 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:18 --> URI Class Initialized
DEBUG - 2025-05-15 13:02:18 --> No URI present. Default controller set.
INFO - 2025-05-15 13:02:18 --> Router Class Initialized
INFO - 2025-05-15 13:02:18 --> Output Class Initialized
INFO - 2025-05-15 13:02:18 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:18 --> Input Class Initialized
INFO - 2025-05-15 13:02:18 --> Language Class Initialized
INFO - 2025-05-15 13:02:18 --> Loader Class Initialized
INFO - 2025-05-15 13:02:18 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:18 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:18 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:18 --> Controller Class Initialized
INFO - 2025-05-15 13:02:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:02:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:02:18 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:18 --> Total execution time: 0.0165
INFO - 2025-05-15 13:02:24 --> Config Class Initialized
INFO - 2025-05-15 13:02:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:24 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:24 --> URI Class Initialized
INFO - 2025-05-15 13:02:24 --> Router Class Initialized
INFO - 2025-05-15 13:02:24 --> Output Class Initialized
INFO - 2025-05-15 13:02:24 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:24 --> Input Class Initialized
INFO - 2025-05-15 13:02:24 --> Language Class Initialized
INFO - 2025-05-15 13:02:24 --> Loader Class Initialized
INFO - 2025-05-15 13:02:24 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:24 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:24 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:24 --> Controller Class Initialized
INFO - 2025-05-15 13:02:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:24 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:24 --> Total execution time: 0.0190
INFO - 2025-05-15 13:02:25 --> Config Class Initialized
INFO - 2025-05-15 13:02:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:25 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:25 --> URI Class Initialized
INFO - 2025-05-15 13:02:25 --> Router Class Initialized
INFO - 2025-05-15 13:02:25 --> Output Class Initialized
INFO - 2025-05-15 13:02:25 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:25 --> Input Class Initialized
INFO - 2025-05-15 13:02:25 --> Language Class Initialized
INFO - 2025-05-15 13:02:25 --> Loader Class Initialized
INFO - 2025-05-15 13:02:25 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:25 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:25 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:25 --> Controller Class Initialized
INFO - 2025-05-15 13:02:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:26 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:26 --> Total execution time: 0.0322
INFO - 2025-05-15 13:02:28 --> Config Class Initialized
INFO - 2025-05-15 13:02:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:28 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:28 --> URI Class Initialized
INFO - 2025-05-15 13:02:28 --> Router Class Initialized
INFO - 2025-05-15 13:02:28 --> Output Class Initialized
INFO - 2025-05-15 13:02:28 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:28 --> Input Class Initialized
INFO - 2025-05-15 13:02:28 --> Language Class Initialized
INFO - 2025-05-15 13:02:28 --> Loader Class Initialized
INFO - 2025-05-15 13:02:28 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:28 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:28 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:28 --> Controller Class Initialized
INFO - 2025-05-15 13:02:29 --> Config Class Initialized
INFO - 2025-05-15 13:02:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:29 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:29 --> URI Class Initialized
INFO - 2025-05-15 13:02:29 --> Router Class Initialized
INFO - 2025-05-15 13:02:29 --> Output Class Initialized
INFO - 2025-05-15 13:02:29 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:29 --> Input Class Initialized
INFO - 2025-05-15 13:02:29 --> Language Class Initialized
INFO - 2025-05-15 13:02:29 --> Loader Class Initialized
INFO - 2025-05-15 13:02:29 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:29 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:29 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:29 --> Controller Class Initialized
INFO - 2025-05-15 13:02:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:29 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:29 --> Total execution time: 0.0371
INFO - 2025-05-15 13:02:29 --> Config Class Initialized
INFO - 2025-05-15 13:02:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:29 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:29 --> URI Class Initialized
INFO - 2025-05-15 13:02:29 --> Router Class Initialized
INFO - 2025-05-15 13:02:29 --> Output Class Initialized
INFO - 2025-05-15 13:02:29 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:29 --> Input Class Initialized
INFO - 2025-05-15 13:02:29 --> Language Class Initialized
INFO - 2025-05-15 13:02:29 --> Loader Class Initialized
INFO - 2025-05-15 13:02:29 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:29 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:29 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:29 --> Controller Class Initialized
INFO - 2025-05-15 13:02:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:29 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:29 --> Total execution time: 0.0395
INFO - 2025-05-15 13:02:30 --> Config Class Initialized
INFO - 2025-05-15 13:02:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:30 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:30 --> URI Class Initialized
INFO - 2025-05-15 13:02:30 --> Router Class Initialized
INFO - 2025-05-15 13:02:30 --> Output Class Initialized
INFO - 2025-05-15 13:02:30 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:30 --> Input Class Initialized
INFO - 2025-05-15 13:02:30 --> Language Class Initialized
INFO - 2025-05-15 13:02:30 --> Loader Class Initialized
INFO - 2025-05-15 13:02:30 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:30 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:30 --> Controller Class Initialized
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:30 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:30 --> Total execution time: 0.0413
INFO - 2025-05-15 13:02:30 --> Config Class Initialized
INFO - 2025-05-15 13:02:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:30 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:30 --> URI Class Initialized
INFO - 2025-05-15 13:02:30 --> Router Class Initialized
INFO - 2025-05-15 13:02:30 --> Output Class Initialized
INFO - 2025-05-15 13:02:30 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:30 --> Input Class Initialized
INFO - 2025-05-15 13:02:30 --> Language Class Initialized
INFO - 2025-05-15 13:02:30 --> Loader Class Initialized
INFO - 2025-05-15 13:02:30 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:30 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:30 --> Controller Class Initialized
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:30 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:30 --> Total execution time: 0.0409
INFO - 2025-05-15 13:02:30 --> Config Class Initialized
INFO - 2025-05-15 13:02:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:30 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:30 --> URI Class Initialized
INFO - 2025-05-15 13:02:30 --> Router Class Initialized
INFO - 2025-05-15 13:02:30 --> Output Class Initialized
INFO - 2025-05-15 13:02:30 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:30 --> Input Class Initialized
INFO - 2025-05-15 13:02:30 --> Language Class Initialized
INFO - 2025-05-15 13:02:30 --> Loader Class Initialized
INFO - 2025-05-15 13:02:30 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:30 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:30 --> Controller Class Initialized
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:30 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:30 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:30 --> Total execution time: 0.0361
INFO - 2025-05-15 13:02:31 --> Config Class Initialized
INFO - 2025-05-15 13:02:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:31 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:31 --> URI Class Initialized
INFO - 2025-05-15 13:02:31 --> Router Class Initialized
INFO - 2025-05-15 13:02:31 --> Output Class Initialized
INFO - 2025-05-15 13:02:31 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:31 --> Input Class Initialized
INFO - 2025-05-15 13:02:31 --> Language Class Initialized
INFO - 2025-05-15 13:02:31 --> Loader Class Initialized
INFO - 2025-05-15 13:02:31 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:31 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:31 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:31 --> Controller Class Initialized
INFO - 2025-05-15 13:02:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:31 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:31 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:31 --> Total execution time: 0.0095
INFO - 2025-05-15 13:02:31 --> Config Class Initialized
INFO - 2025-05-15 13:02:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:02:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:02:31 --> Utf8 Class Initialized
INFO - 2025-05-15 13:02:31 --> URI Class Initialized
INFO - 2025-05-15 13:02:31 --> Router Class Initialized
INFO - 2025-05-15 13:02:31 --> Output Class Initialized
INFO - 2025-05-15 13:02:31 --> Security Class Initialized
DEBUG - 2025-05-15 13:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:02:31 --> Input Class Initialized
INFO - 2025-05-15 13:02:31 --> Language Class Initialized
INFO - 2025-05-15 13:02:31 --> Loader Class Initialized
INFO - 2025-05-15 13:02:31 --> Helper loaded: url_helper
INFO - 2025-05-15 13:02:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:02:31 --> Helper loaded: form_helper
INFO - 2025-05-15 13:02:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:02:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:02:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:02:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:02:31 --> Form Validation Class Initialized
INFO - 2025-05-15 13:02:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:02:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:02:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:02:31 --> Controller Class Initialized
INFO - 2025-05-15 13:02:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:02:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:02:31 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:02:31 --> Final output sent to browser
DEBUG - 2025-05-15 13:02:31 --> Total execution time: 0.0411
INFO - 2025-05-15 13:04:48 --> Config Class Initialized
INFO - 2025-05-15 13:04:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:04:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:04:48 --> Utf8 Class Initialized
INFO - 2025-05-15 13:04:48 --> URI Class Initialized
DEBUG - 2025-05-15 13:04:48 --> No URI present. Default controller set.
INFO - 2025-05-15 13:04:48 --> Router Class Initialized
INFO - 2025-05-15 13:04:48 --> Output Class Initialized
INFO - 2025-05-15 13:04:48 --> Security Class Initialized
DEBUG - 2025-05-15 13:04:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:04:48 --> Input Class Initialized
INFO - 2025-05-15 13:04:48 --> Language Class Initialized
INFO - 2025-05-15 13:04:48 --> Loader Class Initialized
INFO - 2025-05-15 13:04:48 --> Helper loaded: url_helper
INFO - 2025-05-15 13:04:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:04:48 --> Helper loaded: form_helper
INFO - 2025-05-15 13:04:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:04:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:04:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:04:48 --> Form Validation Class Initialized
INFO - 2025-05-15 13:04:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:04:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:04:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:04:48 --> Controller Class Initialized
INFO - 2025-05-15 13:04:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:04:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:04:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:04:48 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:04:48 --> Final output sent to browser
DEBUG - 2025-05-15 13:04:48 --> Total execution time: 0.0401
INFO - 2025-05-15 13:06:12 --> Config Class Initialized
INFO - 2025-05-15 13:06:12 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:06:12 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:06:12 --> Utf8 Class Initialized
INFO - 2025-05-15 13:06:12 --> URI Class Initialized
INFO - 2025-05-15 13:06:12 --> Router Class Initialized
INFO - 2025-05-15 13:06:12 --> Output Class Initialized
INFO - 2025-05-15 13:06:12 --> Security Class Initialized
DEBUG - 2025-05-15 13:06:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:06:12 --> Input Class Initialized
INFO - 2025-05-15 13:06:12 --> Language Class Initialized
INFO - 2025-05-15 13:06:12 --> Loader Class Initialized
INFO - 2025-05-15 13:06:12 --> Helper loaded: url_helper
INFO - 2025-05-15 13:06:12 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:06:12 --> Helper loaded: form_helper
INFO - 2025-05-15 13:06:12 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:06:12 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:06:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:06:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:06:12 --> Form Validation Class Initialized
INFO - 2025-05-15 13:06:12 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:06:12 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:06:12 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:06:12 --> Controller Class Initialized
INFO - 2025-05-15 13:06:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:06:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:06:12 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:06:12 --> Final output sent to browser
DEBUG - 2025-05-15 13:06:12 --> Total execution time: 0.0115
INFO - 2025-05-15 13:06:15 --> Config Class Initialized
INFO - 2025-05-15 13:06:15 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:06:15 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:06:15 --> Utf8 Class Initialized
INFO - 2025-05-15 13:06:15 --> URI Class Initialized
INFO - 2025-05-15 13:06:15 --> Router Class Initialized
INFO - 2025-05-15 13:06:15 --> Output Class Initialized
INFO - 2025-05-15 13:06:15 --> Security Class Initialized
DEBUG - 2025-05-15 13:06:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:06:15 --> Input Class Initialized
INFO - 2025-05-15 13:06:15 --> Language Class Initialized
INFO - 2025-05-15 13:06:15 --> Loader Class Initialized
INFO - 2025-05-15 13:06:15 --> Helper loaded: url_helper
INFO - 2025-05-15 13:06:15 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:06:15 --> Helper loaded: form_helper
INFO - 2025-05-15 13:06:15 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:06:15 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:06:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:06:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:06:15 --> Form Validation Class Initialized
INFO - 2025-05-15 13:06:15 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:06:15 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:06:15 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:06:15 --> Controller Class Initialized
INFO - 2025-05-15 13:06:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:06:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:06:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:06:15 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:06:15 --> Final output sent to browser
DEBUG - 2025-05-15 13:06:15 --> Total execution time: 0.0125
INFO - 2025-05-15 13:06:50 --> Config Class Initialized
INFO - 2025-05-15 13:06:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:06:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:06:50 --> Utf8 Class Initialized
INFO - 2025-05-15 13:06:50 --> URI Class Initialized
INFO - 2025-05-15 13:06:50 --> Router Class Initialized
INFO - 2025-05-15 13:06:50 --> Output Class Initialized
INFO - 2025-05-15 13:06:50 --> Security Class Initialized
DEBUG - 2025-05-15 13:06:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:06:50 --> Input Class Initialized
INFO - 2025-05-15 13:06:50 --> Language Class Initialized
INFO - 2025-05-15 13:06:50 --> Loader Class Initialized
INFO - 2025-05-15 13:06:50 --> Helper loaded: url_helper
INFO - 2025-05-15 13:06:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:06:50 --> Helper loaded: form_helper
INFO - 2025-05-15 13:06:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:06:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:06:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:06:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:06:50 --> Form Validation Class Initialized
INFO - 2025-05-15 13:06:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:06:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:06:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:06:50 --> Controller Class Initialized
INFO - 2025-05-15 13:07:27 --> Config Class Initialized
INFO - 2025-05-15 13:07:27 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:07:27 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:07:27 --> Utf8 Class Initialized
INFO - 2025-05-15 13:07:27 --> URI Class Initialized
INFO - 2025-05-15 13:07:27 --> Router Class Initialized
INFO - 2025-05-15 13:07:27 --> Output Class Initialized
INFO - 2025-05-15 13:07:27 --> Security Class Initialized
DEBUG - 2025-05-15 13:07:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:07:27 --> Input Class Initialized
INFO - 2025-05-15 13:07:27 --> Language Class Initialized
INFO - 2025-05-15 13:07:27 --> Loader Class Initialized
INFO - 2025-05-15 13:07:27 --> Helper loaded: url_helper
INFO - 2025-05-15 13:07:27 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:07:27 --> Helper loaded: form_helper
INFO - 2025-05-15 13:07:27 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:07:27 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:07:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:07:27 --> Form Validation Class Initialized
INFO - 2025-05-15 13:07:27 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:07:27 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:07:27 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:07:27 --> Controller Class Initialized
INFO - 2025-05-15 13:07:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:07:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:07:27 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/tambah.php
INFO - 2025-05-15 13:07:27 --> Final output sent to browser
DEBUG - 2025-05-15 13:07:27 --> Total execution time: 0.0103
INFO - 2025-05-15 13:14:19 --> Config Class Initialized
INFO - 2025-05-15 13:14:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:14:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:14:19 --> Utf8 Class Initialized
INFO - 2025-05-15 13:14:19 --> URI Class Initialized
INFO - 2025-05-15 13:14:19 --> Router Class Initialized
INFO - 2025-05-15 13:14:19 --> Output Class Initialized
INFO - 2025-05-15 13:14:19 --> Security Class Initialized
DEBUG - 2025-05-15 13:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:14:19 --> Input Class Initialized
INFO - 2025-05-15 13:14:19 --> Language Class Initialized
INFO - 2025-05-15 13:14:19 --> Loader Class Initialized
INFO - 2025-05-15 13:14:19 --> Helper loaded: url_helper
INFO - 2025-05-15 13:14:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:14:19 --> Helper loaded: form_helper
INFO - 2025-05-15 13:14:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:14:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:14:19 --> Form Validation Class Initialized
INFO - 2025-05-15 13:14:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:14:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:14:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:14:19 --> Controller Class Initialized
INFO - 2025-05-15 13:14:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:14:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:14:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:14:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:14:19 --> Final output sent to browser
DEBUG - 2025-05-15 13:14:19 --> Total execution time: 0.0151
INFO - 2025-05-15 13:14:21 --> Config Class Initialized
INFO - 2025-05-15 13:14:21 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:14:21 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:14:21 --> Utf8 Class Initialized
INFO - 2025-05-15 13:14:21 --> URI Class Initialized
INFO - 2025-05-15 13:14:21 --> Router Class Initialized
INFO - 2025-05-15 13:14:21 --> Output Class Initialized
INFO - 2025-05-15 13:14:21 --> Security Class Initialized
DEBUG - 2025-05-15 13:14:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:14:21 --> Input Class Initialized
INFO - 2025-05-15 13:14:21 --> Language Class Initialized
INFO - 2025-05-15 13:14:21 --> Loader Class Initialized
INFO - 2025-05-15 13:14:21 --> Helper loaded: url_helper
INFO - 2025-05-15 13:14:21 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:14:21 --> Helper loaded: form_helper
INFO - 2025-05-15 13:14:21 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:14:21 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:14:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:14:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:14:21 --> Form Validation Class Initialized
INFO - 2025-05-15 13:14:21 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:14:21 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:14:21 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:14:21 --> Controller Class Initialized
INFO - 2025-05-15 13:14:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:14:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:14:21 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:14:21 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:14:21 --> Final output sent to browser
DEBUG - 2025-05-15 13:14:21 --> Total execution time: 0.0343
INFO - 2025-05-15 13:14:54 --> Config Class Initialized
INFO - 2025-05-15 13:14:54 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:14:54 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:14:54 --> Utf8 Class Initialized
INFO - 2025-05-15 13:14:54 --> URI Class Initialized
INFO - 2025-05-15 13:14:54 --> Router Class Initialized
INFO - 2025-05-15 13:14:54 --> Output Class Initialized
INFO - 2025-05-15 13:14:54 --> Security Class Initialized
DEBUG - 2025-05-15 13:14:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:14:54 --> Input Class Initialized
INFO - 2025-05-15 13:14:54 --> Language Class Initialized
INFO - 2025-05-15 13:14:54 --> Loader Class Initialized
INFO - 2025-05-15 13:14:54 --> Helper loaded: url_helper
INFO - 2025-05-15 13:14:54 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:14:54 --> Helper loaded: form_helper
INFO - 2025-05-15 13:14:54 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:14:54 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:14:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:14:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:14:54 --> Form Validation Class Initialized
INFO - 2025-05-15 13:14:54 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:14:54 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:14:54 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:14:54 --> Controller Class Initialized
INFO - 2025-05-15 13:14:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:14:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:14:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:14:54 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:14:54 --> Final output sent to browser
DEBUG - 2025-05-15 13:14:54 --> Total execution time: 0.0229
INFO - 2025-05-15 13:14:56 --> Config Class Initialized
INFO - 2025-05-15 13:14:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:14:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:14:56 --> Utf8 Class Initialized
INFO - 2025-05-15 13:14:56 --> URI Class Initialized
INFO - 2025-05-15 13:14:56 --> Router Class Initialized
INFO - 2025-05-15 13:14:56 --> Output Class Initialized
INFO - 2025-05-15 13:14:56 --> Security Class Initialized
DEBUG - 2025-05-15 13:14:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:14:56 --> Input Class Initialized
INFO - 2025-05-15 13:14:56 --> Language Class Initialized
INFO - 2025-05-15 13:14:56 --> Loader Class Initialized
INFO - 2025-05-15 13:14:56 --> Helper loaded: url_helper
INFO - 2025-05-15 13:14:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:14:56 --> Helper loaded: form_helper
INFO - 2025-05-15 13:14:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:14:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:14:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:14:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:14:56 --> Form Validation Class Initialized
INFO - 2025-05-15 13:14:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:14:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:14:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:14:56 --> Controller Class Initialized
DEBUG - 2025-05-15 13:14:56 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (SELECT 
                        transaksi_id, 
                        string_agg(barang.nama || ' (' || jumlah || ' x ' || 
                        (total / NULLIF(jumlah, 0)) || ')', ', ') AS barang_dibeli
                     FROM detail_transaksi
                     JOIN barang ON barang.id = detail_transaksi.barang_id
                     GROUP BY transaksi_id) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 13:15:45 --> Config Class Initialized
INFO - 2025-05-15 13:15:45 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:15:45 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:15:45 --> Utf8 Class Initialized
INFO - 2025-05-15 13:15:45 --> URI Class Initialized
INFO - 2025-05-15 13:15:45 --> Router Class Initialized
INFO - 2025-05-15 13:15:45 --> Output Class Initialized
INFO - 2025-05-15 13:15:45 --> Security Class Initialized
DEBUG - 2025-05-15 13:15:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:15:45 --> Input Class Initialized
INFO - 2025-05-15 13:15:45 --> Language Class Initialized
INFO - 2025-05-15 13:15:45 --> Loader Class Initialized
INFO - 2025-05-15 13:15:45 --> Helper loaded: url_helper
INFO - 2025-05-15 13:15:45 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:15:45 --> Helper loaded: form_helper
INFO - 2025-05-15 13:15:45 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:15:45 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:15:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:15:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:15:45 --> Form Validation Class Initialized
INFO - 2025-05-15 13:15:45 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:15:45 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:15:45 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:15:45 --> Controller Class Initialized
INFO - 2025-05-15 13:15:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:15:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:15:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:15:45 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:15:45 --> Final output sent to browser
DEBUG - 2025-05-15 13:15:45 --> Total execution time: 0.0193
INFO - 2025-05-15 13:15:53 --> Config Class Initialized
INFO - 2025-05-15 13:15:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:15:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:15:53 --> Utf8 Class Initialized
INFO - 2025-05-15 13:15:53 --> URI Class Initialized
INFO - 2025-05-15 13:15:53 --> Router Class Initialized
INFO - 2025-05-15 13:15:53 --> Output Class Initialized
INFO - 2025-05-15 13:15:53 --> Security Class Initialized
DEBUG - 2025-05-15 13:15:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:15:53 --> Input Class Initialized
INFO - 2025-05-15 13:15:53 --> Language Class Initialized
INFO - 2025-05-15 13:15:53 --> Loader Class Initialized
INFO - 2025-05-15 13:15:53 --> Helper loaded: url_helper
INFO - 2025-05-15 13:15:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:15:53 --> Helper loaded: form_helper
INFO - 2025-05-15 13:15:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:15:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:15:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:15:53 --> Form Validation Class Initialized
INFO - 2025-05-15 13:15:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:15:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:15:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:15:53 --> Controller Class Initialized
INFO - 2025-05-15 13:15:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:15:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:15:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:15:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:15:53 --> Final output sent to browser
DEBUG - 2025-05-15 13:15:53 --> Total execution time: 0.0250
INFO - 2025-05-15 13:15:55 --> Config Class Initialized
INFO - 2025-05-15 13:15:55 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:15:55 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:15:55 --> Utf8 Class Initialized
INFO - 2025-05-15 13:15:55 --> URI Class Initialized
INFO - 2025-05-15 13:15:55 --> Router Class Initialized
INFO - 2025-05-15 13:15:55 --> Output Class Initialized
INFO - 2025-05-15 13:15:55 --> Security Class Initialized
DEBUG - 2025-05-15 13:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:15:55 --> Input Class Initialized
INFO - 2025-05-15 13:15:55 --> Language Class Initialized
INFO - 2025-05-15 13:15:55 --> Loader Class Initialized
INFO - 2025-05-15 13:15:55 --> Helper loaded: url_helper
INFO - 2025-05-15 13:15:55 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:15:55 --> Helper loaded: form_helper
INFO - 2025-05-15 13:15:55 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:15:55 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:15:55 --> Form Validation Class Initialized
INFO - 2025-05-15 13:15:55 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:15:55 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:15:55 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:15:55 --> Controller Class Initialized
DEBUG - 2025-05-15 13:15:55 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (SELECT 
                        transaksi_id, 
                        string_agg(barang.nama || ' (' || jumlah || ' x ' || 
                        (total / NULLIF(jumlah, 0)) || ')', ', ') AS barang_dibeli
                     FROM detail_transaksi
                     JOIN barang ON barang.id = detail_transaksi.barang_id
                     GROUP BY transaksi_id) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 13:18:39 --> Config Class Initialized
INFO - 2025-05-15 13:18:39 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:18:39 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:18:39 --> Utf8 Class Initialized
INFO - 2025-05-15 13:18:39 --> URI Class Initialized
INFO - 2025-05-15 13:18:39 --> Router Class Initialized
INFO - 2025-05-15 13:18:39 --> Output Class Initialized
INFO - 2025-05-15 13:18:39 --> Security Class Initialized
DEBUG - 2025-05-15 13:18:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:18:39 --> Input Class Initialized
INFO - 2025-05-15 13:18:39 --> Language Class Initialized
INFO - 2025-05-15 13:18:39 --> Loader Class Initialized
INFO - 2025-05-15 13:18:39 --> Helper loaded: url_helper
INFO - 2025-05-15 13:18:39 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:18:39 --> Helper loaded: form_helper
INFO - 2025-05-15 13:18:39 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:18:39 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:18:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:18:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:18:39 --> Form Validation Class Initialized
INFO - 2025-05-15 13:18:39 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:18:39 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:18:39 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:18:39 --> Controller Class Initialized
INFO - 2025-05-15 13:18:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:18:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:18:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:18:39 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:18:39 --> Final output sent to browser
DEBUG - 2025-05-15 13:18:39 --> Total execution time: 0.0296
INFO - 2025-05-15 13:18:47 --> Config Class Initialized
INFO - 2025-05-15 13:18:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:18:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:18:47 --> Utf8 Class Initialized
INFO - 2025-05-15 13:18:47 --> URI Class Initialized
INFO - 2025-05-15 13:18:47 --> Router Class Initialized
INFO - 2025-05-15 13:18:47 --> Output Class Initialized
INFO - 2025-05-15 13:18:47 --> Security Class Initialized
DEBUG - 2025-05-15 13:18:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:18:47 --> Input Class Initialized
INFO - 2025-05-15 13:18:47 --> Language Class Initialized
INFO - 2025-05-15 13:18:47 --> Loader Class Initialized
INFO - 2025-05-15 13:18:47 --> Helper loaded: url_helper
INFO - 2025-05-15 13:18:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:18:47 --> Helper loaded: form_helper
INFO - 2025-05-15 13:18:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:18:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:18:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:18:47 --> Form Validation Class Initialized
INFO - 2025-05-15 13:18:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:18:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:18:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:18:47 --> Controller Class Initialized
INFO - 2025-05-15 13:18:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:18:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:18:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:18:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:18:47 --> Final output sent to browser
DEBUG - 2025-05-15 13:18:47 --> Total execution time: 0.0096
INFO - 2025-05-15 13:19:14 --> Config Class Initialized
INFO - 2025-05-15 13:19:14 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:14 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:14 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:14 --> URI Class Initialized
INFO - 2025-05-15 13:19:14 --> Router Class Initialized
INFO - 2025-05-15 13:19:14 --> Output Class Initialized
INFO - 2025-05-15 13:19:14 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:14 --> Input Class Initialized
INFO - 2025-05-15 13:19:14 --> Language Class Initialized
INFO - 2025-05-15 13:19:14 --> Loader Class Initialized
INFO - 2025-05-15 13:19:14 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:14 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:14 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:14 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:14 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:14 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:14 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:14 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:14 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:14 --> Controller Class Initialized
INFO - 2025-05-15 13:19:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:14 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:14 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:14 --> Total execution time: 0.0195
INFO - 2025-05-15 13:19:17 --> Config Class Initialized
INFO - 2025-05-15 13:19:17 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:17 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:17 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:17 --> URI Class Initialized
INFO - 2025-05-15 13:19:17 --> Router Class Initialized
INFO - 2025-05-15 13:19:17 --> Output Class Initialized
INFO - 2025-05-15 13:19:17 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:17 --> Input Class Initialized
INFO - 2025-05-15 13:19:17 --> Language Class Initialized
INFO - 2025-05-15 13:19:17 --> Loader Class Initialized
INFO - 2025-05-15 13:19:17 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:17 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:17 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:17 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:17 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:17 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:17 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:17 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:17 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:17 --> Controller Class Initialized
INFO - 2025-05-15 13:19:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:17 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:17 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:17 --> Total execution time: 0.0141
INFO - 2025-05-15 13:19:18 --> Config Class Initialized
INFO - 2025-05-15 13:19:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:18 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:18 --> URI Class Initialized
INFO - 2025-05-15 13:19:18 --> Router Class Initialized
INFO - 2025-05-15 13:19:18 --> Output Class Initialized
INFO - 2025-05-15 13:19:18 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:18 --> Input Class Initialized
INFO - 2025-05-15 13:19:18 --> Language Class Initialized
INFO - 2025-05-15 13:19:18 --> Loader Class Initialized
INFO - 2025-05-15 13:19:18 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:18 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:18 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:18 --> Controller Class Initialized
INFO - 2025-05-15 13:19:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:18 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:18 --> Total execution time: 0.0309
INFO - 2025-05-15 13:19:28 --> Config Class Initialized
INFO - 2025-05-15 13:19:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:28 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:28 --> URI Class Initialized
INFO - 2025-05-15 13:19:28 --> Router Class Initialized
INFO - 2025-05-15 13:19:28 --> Output Class Initialized
INFO - 2025-05-15 13:19:28 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:28 --> Input Class Initialized
INFO - 2025-05-15 13:19:28 --> Language Class Initialized
INFO - 2025-05-15 13:19:28 --> Loader Class Initialized
INFO - 2025-05-15 13:19:28 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:28 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:28 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:28 --> Controller Class Initialized
INFO - 2025-05-15 13:19:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:28 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:28 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:28 --> Total execution time: 0.0111
INFO - 2025-05-15 13:19:37 --> Config Class Initialized
INFO - 2025-05-15 13:19:37 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:37 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:37 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:37 --> URI Class Initialized
INFO - 2025-05-15 13:19:37 --> Router Class Initialized
INFO - 2025-05-15 13:19:37 --> Output Class Initialized
INFO - 2025-05-15 13:19:37 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:37 --> Input Class Initialized
INFO - 2025-05-15 13:19:37 --> Language Class Initialized
INFO - 2025-05-15 13:19:37 --> Loader Class Initialized
INFO - 2025-05-15 13:19:37 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:37 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:37 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:37 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:37 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:37 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:37 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:37 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:37 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:37 --> Controller Class Initialized
INFO - 2025-05-15 13:19:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:37 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:37 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:37 --> Total execution time: 0.0186
INFO - 2025-05-15 13:19:49 --> Config Class Initialized
INFO - 2025-05-15 13:19:49 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:49 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:49 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:49 --> URI Class Initialized
INFO - 2025-05-15 13:19:49 --> Router Class Initialized
INFO - 2025-05-15 13:19:49 --> Output Class Initialized
INFO - 2025-05-15 13:19:49 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:49 --> Input Class Initialized
INFO - 2025-05-15 13:19:49 --> Language Class Initialized
INFO - 2025-05-15 13:19:49 --> Loader Class Initialized
INFO - 2025-05-15 13:19:49 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:49 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:49 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:49 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:49 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:49 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:49 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:49 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:49 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:49 --> Controller Class Initialized
INFO - 2025-05-15 13:19:49 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:49 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:49 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:49 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:49 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:49 --> Total execution time: 0.0259
INFO - 2025-05-15 13:19:59 --> Config Class Initialized
INFO - 2025-05-15 13:19:59 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:19:59 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:19:59 --> Utf8 Class Initialized
INFO - 2025-05-15 13:19:59 --> URI Class Initialized
INFO - 2025-05-15 13:19:59 --> Router Class Initialized
INFO - 2025-05-15 13:19:59 --> Output Class Initialized
INFO - 2025-05-15 13:19:59 --> Security Class Initialized
DEBUG - 2025-05-15 13:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:19:59 --> Input Class Initialized
INFO - 2025-05-15 13:19:59 --> Language Class Initialized
INFO - 2025-05-15 13:19:59 --> Loader Class Initialized
INFO - 2025-05-15 13:19:59 --> Helper loaded: url_helper
INFO - 2025-05-15 13:19:59 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:19:59 --> Helper loaded: form_helper
INFO - 2025-05-15 13:19:59 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:19:59 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:19:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:19:59 --> Form Validation Class Initialized
INFO - 2025-05-15 13:19:59 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:19:59 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:19:59 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:19:59 --> Controller Class Initialized
INFO - 2025-05-15 13:19:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:19:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:19:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:19:59 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:19:59 --> Final output sent to browser
DEBUG - 2025-05-15 13:19:59 --> Total execution time: 0.0170
INFO - 2025-05-15 13:30:24 --> Config Class Initialized
INFO - 2025-05-15 13:30:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:30:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:30:24 --> Utf8 Class Initialized
INFO - 2025-05-15 13:30:24 --> URI Class Initialized
INFO - 2025-05-15 13:30:24 --> Router Class Initialized
INFO - 2025-05-15 13:30:24 --> Output Class Initialized
INFO - 2025-05-15 13:30:24 --> Security Class Initialized
DEBUG - 2025-05-15 13:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:30:24 --> Input Class Initialized
INFO - 2025-05-15 13:30:24 --> Language Class Initialized
INFO - 2025-05-15 13:30:24 --> Loader Class Initialized
INFO - 2025-05-15 13:30:24 --> Helper loaded: url_helper
INFO - 2025-05-15 13:30:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:30:24 --> Helper loaded: form_helper
INFO - 2025-05-15 13:30:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:30:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:30:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:30:24 --> Form Validation Class Initialized
INFO - 2025-05-15 13:30:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:30:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:30:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:30:24 --> Controller Class Initialized
INFO - 2025-05-15 13:30:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:24 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:30:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:30:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:30:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:30:24 --> Final output sent to browser
DEBUG - 2025-05-15 13:30:24 --> Total execution time: 0.0136
INFO - 2025-05-15 13:30:30 --> Config Class Initialized
INFO - 2025-05-15 13:30:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:30:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:30:30 --> Utf8 Class Initialized
INFO - 2025-05-15 13:30:30 --> URI Class Initialized
INFO - 2025-05-15 13:30:30 --> Router Class Initialized
INFO - 2025-05-15 13:30:30 --> Output Class Initialized
INFO - 2025-05-15 13:30:30 --> Security Class Initialized
DEBUG - 2025-05-15 13:30:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:30:30 --> Input Class Initialized
INFO - 2025-05-15 13:30:30 --> Language Class Initialized
INFO - 2025-05-15 13:30:30 --> Loader Class Initialized
INFO - 2025-05-15 13:30:30 --> Helper loaded: url_helper
INFO - 2025-05-15 13:30:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:30:30 --> Helper loaded: form_helper
INFO - 2025-05-15 13:30:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:30:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:30:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:30:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:30:30 --> Form Validation Class Initialized
INFO - 2025-05-15 13:30:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:30:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:30:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:30:30 --> Controller Class Initialized
INFO - 2025-05-15 13:30:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:30:30 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:30:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:30:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:30:30 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:30:30 --> Final output sent to browser
DEBUG - 2025-05-15 13:30:30 --> Total execution time: 0.0209
INFO - 2025-05-15 13:32:52 --> Config Class Initialized
INFO - 2025-05-15 13:32:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:32:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:32:52 --> Utf8 Class Initialized
INFO - 2025-05-15 13:32:52 --> URI Class Initialized
INFO - 2025-05-15 13:32:52 --> Router Class Initialized
INFO - 2025-05-15 13:32:52 --> Output Class Initialized
INFO - 2025-05-15 13:32:52 --> Security Class Initialized
DEBUG - 2025-05-15 13:32:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:32:52 --> Input Class Initialized
INFO - 2025-05-15 13:32:52 --> Language Class Initialized
INFO - 2025-05-15 13:32:52 --> Loader Class Initialized
INFO - 2025-05-15 13:32:52 --> Helper loaded: url_helper
INFO - 2025-05-15 13:32:52 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:32:52 --> Helper loaded: form_helper
INFO - 2025-05-15 13:32:52 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:32:52 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:32:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:32:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:32:52 --> Form Validation Class Initialized
INFO - 2025-05-15 13:32:52 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:32:52 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:32:52 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:32:52 --> Controller Class Initialized
INFO - 2025-05-15 13:32:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:52 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:32:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:32:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:32:52 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:32:52 --> Final output sent to browser
DEBUG - 2025-05-15 13:32:52 --> Total execution time: 0.0173
INFO - 2025-05-15 13:32:53 --> Config Class Initialized
INFO - 2025-05-15 13:32:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:32:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:32:53 --> Utf8 Class Initialized
INFO - 2025-05-15 13:32:53 --> URI Class Initialized
INFO - 2025-05-15 13:32:53 --> Router Class Initialized
INFO - 2025-05-15 13:32:53 --> Output Class Initialized
INFO - 2025-05-15 13:32:53 --> Security Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:32:53 --> Input Class Initialized
INFO - 2025-05-15 13:32:53 --> Language Class Initialized
INFO - 2025-05-15 13:32:53 --> Loader Class Initialized
INFO - 2025-05-15 13:32:53 --> Helper loaded: url_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: form_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:32:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:32:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:32:53 --> Form Validation Class Initialized
INFO - 2025-05-15 13:32:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:32:53 --> Controller Class Initialized
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:32:53 --> Final output sent to browser
DEBUG - 2025-05-15 13:32:53 --> Total execution time: 0.0466
INFO - 2025-05-15 13:32:53 --> Config Class Initialized
INFO - 2025-05-15 13:32:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:32:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:32:53 --> Utf8 Class Initialized
INFO - 2025-05-15 13:32:53 --> URI Class Initialized
INFO - 2025-05-15 13:32:53 --> Router Class Initialized
INFO - 2025-05-15 13:32:53 --> Output Class Initialized
INFO - 2025-05-15 13:32:53 --> Security Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:32:53 --> Input Class Initialized
INFO - 2025-05-15 13:32:53 --> Language Class Initialized
INFO - 2025-05-15 13:32:53 --> Loader Class Initialized
INFO - 2025-05-15 13:32:53 --> Helper loaded: url_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: form_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:32:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:32:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:32:53 --> Form Validation Class Initialized
INFO - 2025-05-15 13:32:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:32:53 --> Controller Class Initialized
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:32:53 --> Final output sent to browser
DEBUG - 2025-05-15 13:32:53 --> Total execution time: 0.0105
INFO - 2025-05-15 13:32:53 --> Config Class Initialized
INFO - 2025-05-15 13:32:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:32:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:32:53 --> Utf8 Class Initialized
INFO - 2025-05-15 13:32:53 --> URI Class Initialized
INFO - 2025-05-15 13:32:53 --> Router Class Initialized
INFO - 2025-05-15 13:32:53 --> Output Class Initialized
INFO - 2025-05-15 13:32:53 --> Security Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:32:53 --> Input Class Initialized
INFO - 2025-05-15 13:32:53 --> Language Class Initialized
INFO - 2025-05-15 13:32:53 --> Loader Class Initialized
INFO - 2025-05-15 13:32:53 --> Helper loaded: url_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: form_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:32:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:32:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:32:53 --> Form Validation Class Initialized
INFO - 2025-05-15 13:32:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:32:53 --> Controller Class Initialized
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:32:53 --> Final output sent to browser
DEBUG - 2025-05-15 13:32:53 --> Total execution time: 0.0106
INFO - 2025-05-15 13:32:53 --> Config Class Initialized
INFO - 2025-05-15 13:32:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:32:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:32:53 --> Utf8 Class Initialized
INFO - 2025-05-15 13:32:53 --> URI Class Initialized
INFO - 2025-05-15 13:32:53 --> Router Class Initialized
INFO - 2025-05-15 13:32:53 --> Output Class Initialized
INFO - 2025-05-15 13:32:53 --> Security Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:32:53 --> Input Class Initialized
INFO - 2025-05-15 13:32:53 --> Language Class Initialized
INFO - 2025-05-15 13:32:53 --> Loader Class Initialized
INFO - 2025-05-15 13:32:53 --> Helper loaded: url_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: form_helper
INFO - 2025-05-15 13:32:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:32:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:32:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:32:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:32:53 --> Form Validation Class Initialized
INFO - 2025-05-15 13:32:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:32:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:32:53 --> Controller Class Initialized
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:32:53 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:32:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:32:53 --> Final output sent to browser
DEBUG - 2025-05-15 13:32:53 --> Total execution time: 0.0105
INFO - 2025-05-15 13:34:42 --> Config Class Initialized
INFO - 2025-05-15 13:34:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:34:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:34:42 --> Utf8 Class Initialized
INFO - 2025-05-15 13:34:42 --> URI Class Initialized
INFO - 2025-05-15 13:34:42 --> Router Class Initialized
INFO - 2025-05-15 13:34:42 --> Output Class Initialized
INFO - 2025-05-15 13:34:42 --> Security Class Initialized
DEBUG - 2025-05-15 13:34:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:34:42 --> Input Class Initialized
INFO - 2025-05-15 13:34:42 --> Language Class Initialized
INFO - 2025-05-15 13:34:42 --> Loader Class Initialized
INFO - 2025-05-15 13:34:42 --> Helper loaded: url_helper
INFO - 2025-05-15 13:34:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:34:42 --> Helper loaded: form_helper
INFO - 2025-05-15 13:34:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:34:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:34:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:34:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:34:42 --> Form Validation Class Initialized
INFO - 2025-05-15 13:34:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:34:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:34:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:34:42 --> Controller Class Initialized
INFO - 2025-05-15 13:34:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:42 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:34:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:34:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:34:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:34:42 --> Final output sent to browser
DEBUG - 2025-05-15 13:34:42 --> Total execution time: 0.0179
INFO - 2025-05-15 13:34:43 --> Config Class Initialized
INFO - 2025-05-15 13:34:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:34:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:34:43 --> Utf8 Class Initialized
INFO - 2025-05-15 13:34:43 --> URI Class Initialized
INFO - 2025-05-15 13:34:43 --> Router Class Initialized
INFO - 2025-05-15 13:34:43 --> Output Class Initialized
INFO - 2025-05-15 13:34:43 --> Security Class Initialized
DEBUG - 2025-05-15 13:34:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:34:43 --> Input Class Initialized
INFO - 2025-05-15 13:34:43 --> Language Class Initialized
INFO - 2025-05-15 13:34:43 --> Loader Class Initialized
INFO - 2025-05-15 13:34:43 --> Helper loaded: url_helper
INFO - 2025-05-15 13:34:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:34:43 --> Helper loaded: form_helper
INFO - 2025-05-15 13:34:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:34:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:34:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:34:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:34:43 --> Form Validation Class Initialized
INFO - 2025-05-15 13:34:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:34:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:34:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:34:43 --> Controller Class Initialized
INFO - 2025-05-15 13:34:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 29
ERROR - 2025-05-15 13:34:43 --> Severity: Notice --> Undefined property: stdClass::$total_setelah_diskon /var/www/html/codeigniter/application/views/transaksi/index.php 30
INFO - 2025-05-15 13:34:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:34:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:34:43 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:34:43 --> Final output sent to browser
DEBUG - 2025-05-15 13:34:43 --> Total execution time: 0.0354
INFO - 2025-05-15 13:37:25 --> Config Class Initialized
INFO - 2025-05-15 13:37:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:37:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:37:25 --> Utf8 Class Initialized
INFO - 2025-05-15 13:37:25 --> URI Class Initialized
INFO - 2025-05-15 13:37:25 --> Router Class Initialized
INFO - 2025-05-15 13:37:25 --> Output Class Initialized
INFO - 2025-05-15 13:37:25 --> Security Class Initialized
DEBUG - 2025-05-15 13:37:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:37:25 --> Input Class Initialized
INFO - 2025-05-15 13:37:25 --> Language Class Initialized
INFO - 2025-05-15 13:37:25 --> Loader Class Initialized
INFO - 2025-05-15 13:37:25 --> Helper loaded: url_helper
INFO - 2025-05-15 13:37:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:37:25 --> Helper loaded: form_helper
INFO - 2025-05-15 13:37:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:37:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:37:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:37:25 --> Form Validation Class Initialized
INFO - 2025-05-15 13:37:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:37:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:37:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:37:25 --> Controller Class Initialized
ERROR - 2025-05-15 13:37:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dt.diskon_rp does not exist
LINE 13:             COALESCE(dt.diskon_rp, 0) + 
                              ^
HINT:  Perhaps you meant to reference the column &quot;dt.disc_rp&quot;. /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 13:37:25 --> Query error: ERROR:  column dt.diskon_rp does not exist
LINE 13:             COALESCE(dt.diskon_rp, 0) + 
                              ^
HINT:  Perhaps you meant to reference the column "dt.disc_rp". - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
    SELECT 
        dt.transaksi_id,
        string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
            ', '
        ) AS barang_dibeli,
        SUM(
            COALESCE(dt.diskon_rp, 0) + 
            (COALESCE(dt.diskon_persen, 0) / 100.0 * dt.total)
        ) AS total_diskon,
        SUM(
            dt.total - (
                COALESCE(dt.diskon_rp, 0) + 
                (COALESCE(dt.diskon_persen, 0) / 100.0 * dt.total)
            )
        ) AS total_setelah_diskon
    FROM detail_transaksi dt
    JOIN barang b ON b.id = dt.barang_id
    GROUP BY dt.transaksi_id
) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 13:37:25 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 13:40:19 --> Config Class Initialized
INFO - 2025-05-15 13:40:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:40:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:40:19 --> Utf8 Class Initialized
INFO - 2025-05-15 13:40:19 --> URI Class Initialized
INFO - 2025-05-15 13:40:19 --> Router Class Initialized
INFO - 2025-05-15 13:40:19 --> Output Class Initialized
INFO - 2025-05-15 13:40:19 --> Security Class Initialized
DEBUG - 2025-05-15 13:40:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:40:19 --> Input Class Initialized
INFO - 2025-05-15 13:40:19 --> Language Class Initialized
INFO - 2025-05-15 13:40:19 --> Loader Class Initialized
INFO - 2025-05-15 13:40:19 --> Helper loaded: url_helper
INFO - 2025-05-15 13:40:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:40:19 --> Helper loaded: form_helper
INFO - 2025-05-15 13:40:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:40:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:40:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:40:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:40:19 --> Form Validation Class Initialized
INFO - 2025-05-15 13:40:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:40:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:40:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:40:19 --> Controller Class Initialized
ERROR - 2025-05-15 13:40:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dt.diskon does not exist
LINE 13:             COALESCE(dt.diskon, 0) + 
                              ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 13:40:19 --> Query error: ERROR:  column dt.diskon does not exist
LINE 13:             COALESCE(dt.diskon, 0) + 
                              ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
    SELECT 
        dt.transaksi_id,
        string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
            ', '
        ) AS barang_dibeli,
        SUM(
            COALESCE(dt.diskon, 0) + 
            (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
        ) AS total_diskon,
        SUM(
            dt.total - (
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            )
        ) AS total_setelah_diskon
    FROM detail_transaksi dt
    JOIN barang b ON b.id = dt.barang_id
    GROUP BY dt.transaksi_id
) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 13:40:19 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 13:40:21 --> Config Class Initialized
INFO - 2025-05-15 13:40:21 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:40:21 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:40:21 --> Utf8 Class Initialized
INFO - 2025-05-15 13:40:21 --> URI Class Initialized
INFO - 2025-05-15 13:40:21 --> Router Class Initialized
INFO - 2025-05-15 13:40:21 --> Output Class Initialized
INFO - 2025-05-15 13:40:21 --> Security Class Initialized
DEBUG - 2025-05-15 13:40:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:40:21 --> Input Class Initialized
INFO - 2025-05-15 13:40:21 --> Language Class Initialized
INFO - 2025-05-15 13:40:21 --> Loader Class Initialized
INFO - 2025-05-15 13:40:21 --> Helper loaded: url_helper
INFO - 2025-05-15 13:40:21 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:40:21 --> Helper loaded: form_helper
INFO - 2025-05-15 13:40:21 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:40:21 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:40:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:40:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:40:21 --> Form Validation Class Initialized
INFO - 2025-05-15 13:40:21 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:40:21 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:40:21 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:40:21 --> Controller Class Initialized
ERROR - 2025-05-15 13:40:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dt.diskon does not exist
LINE 13:             COALESCE(dt.diskon, 0) + 
                              ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 13:40:21 --> Query error: ERROR:  column dt.diskon does not exist
LINE 13:             COALESCE(dt.diskon, 0) + 
                              ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
    SELECT 
        dt.transaksi_id,
        string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
            ', '
        ) AS barang_dibeli,
        SUM(
            COALESCE(dt.diskon, 0) + 
            (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
        ) AS total_diskon,
        SUM(
            dt.total - (
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            )
        ) AS total_setelah_diskon
    FROM detail_transaksi dt
    JOIN barang b ON b.id = dt.barang_id
    GROUP BY dt.transaksi_id
) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 13:40:21 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 13:43:34 --> Config Class Initialized
INFO - 2025-05-15 13:43:34 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:43:34 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:43:34 --> Utf8 Class Initialized
INFO - 2025-05-15 13:43:34 --> URI Class Initialized
INFO - 2025-05-15 13:43:34 --> Router Class Initialized
INFO - 2025-05-15 13:43:34 --> Output Class Initialized
INFO - 2025-05-15 13:43:34 --> Security Class Initialized
DEBUG - 2025-05-15 13:43:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:43:34 --> Input Class Initialized
INFO - 2025-05-15 13:43:34 --> Language Class Initialized
INFO - 2025-05-15 13:43:34 --> Loader Class Initialized
INFO - 2025-05-15 13:43:34 --> Helper loaded: url_helper
INFO - 2025-05-15 13:43:34 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:43:34 --> Helper loaded: form_helper
INFO - 2025-05-15 13:43:34 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:43:34 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:43:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:43:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:43:34 --> Form Validation Class Initialized
INFO - 2025-05-15 13:43:34 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:43:34 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:43:34 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:43:34 --> Controller Class Initialized
INFO - 2025-05-15 13:43:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:43:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:43:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:43:34 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:43:34 --> Final output sent to browser
DEBUG - 2025-05-15 13:43:34 --> Total execution time: 0.0457
INFO - 2025-05-15 13:43:38 --> Config Class Initialized
INFO - 2025-05-15 13:43:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:43:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:43:38 --> Utf8 Class Initialized
INFO - 2025-05-15 13:43:38 --> URI Class Initialized
INFO - 2025-05-15 13:43:38 --> Router Class Initialized
INFO - 2025-05-15 13:43:38 --> Output Class Initialized
INFO - 2025-05-15 13:43:38 --> Security Class Initialized
DEBUG - 2025-05-15 13:43:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:43:38 --> Input Class Initialized
INFO - 2025-05-15 13:43:38 --> Language Class Initialized
INFO - 2025-05-15 13:43:38 --> Loader Class Initialized
INFO - 2025-05-15 13:43:38 --> Helper loaded: url_helper
INFO - 2025-05-15 13:43:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:43:38 --> Helper loaded: form_helper
INFO - 2025-05-15 13:43:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:43:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:43:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:43:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:43:38 --> Form Validation Class Initialized
INFO - 2025-05-15 13:43:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:43:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:43:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:43:38 --> Controller Class Initialized
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:43:38 --> Final output sent to browser
DEBUG - 2025-05-15 13:43:38 --> Total execution time: 0.0288
INFO - 2025-05-15 13:43:38 --> Config Class Initialized
INFO - 2025-05-15 13:43:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:43:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:43:38 --> Utf8 Class Initialized
INFO - 2025-05-15 13:43:38 --> URI Class Initialized
INFO - 2025-05-15 13:43:38 --> Router Class Initialized
INFO - 2025-05-15 13:43:38 --> Output Class Initialized
INFO - 2025-05-15 13:43:38 --> Security Class Initialized
DEBUG - 2025-05-15 13:43:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:43:38 --> Input Class Initialized
INFO - 2025-05-15 13:43:38 --> Language Class Initialized
INFO - 2025-05-15 13:43:38 --> Loader Class Initialized
INFO - 2025-05-15 13:43:38 --> Helper loaded: url_helper
INFO - 2025-05-15 13:43:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:43:38 --> Helper loaded: form_helper
INFO - 2025-05-15 13:43:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:43:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:43:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:43:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:43:38 --> Form Validation Class Initialized
INFO - 2025-05-15 13:43:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:43:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:43:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:43:38 --> Controller Class Initialized
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:43:38 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:43:38 --> Final output sent to browser
DEBUG - 2025-05-15 13:43:38 --> Total execution time: 0.0406
INFO - 2025-05-15 13:44:24 --> Config Class Initialized
INFO - 2025-05-15 13:44:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:44:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:44:24 --> Utf8 Class Initialized
INFO - 2025-05-15 13:44:24 --> URI Class Initialized
INFO - 2025-05-15 13:44:24 --> Router Class Initialized
INFO - 2025-05-15 13:44:24 --> Output Class Initialized
INFO - 2025-05-15 13:44:24 --> Security Class Initialized
DEBUG - 2025-05-15 13:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:44:24 --> Input Class Initialized
INFO - 2025-05-15 13:44:24 --> Language Class Initialized
INFO - 2025-05-15 13:44:24 --> Loader Class Initialized
INFO - 2025-05-15 13:44:24 --> Helper loaded: url_helper
INFO - 2025-05-15 13:44:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:44:24 --> Helper loaded: form_helper
INFO - 2025-05-15 13:44:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:44:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:44:24 --> Form Validation Class Initialized
INFO - 2025-05-15 13:44:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:44:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:44:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:44:24 --> Controller Class Initialized
INFO - 2025-05-15 13:44:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:44:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:44:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:44:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:44:24 --> Final output sent to browser
DEBUG - 2025-05-15 13:44:24 --> Total execution time: 0.0240
INFO - 2025-05-15 13:44:29 --> Config Class Initialized
INFO - 2025-05-15 13:44:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:44:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:44:29 --> Utf8 Class Initialized
INFO - 2025-05-15 13:44:29 --> URI Class Initialized
INFO - 2025-05-15 13:44:29 --> Router Class Initialized
INFO - 2025-05-15 13:44:29 --> Output Class Initialized
INFO - 2025-05-15 13:44:29 --> Security Class Initialized
DEBUG - 2025-05-15 13:44:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:44:29 --> Input Class Initialized
INFO - 2025-05-15 13:44:29 --> Language Class Initialized
INFO - 2025-05-15 13:44:29 --> Loader Class Initialized
INFO - 2025-05-15 13:44:29 --> Helper loaded: url_helper
INFO - 2025-05-15 13:44:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:44:29 --> Helper loaded: form_helper
INFO - 2025-05-15 13:44:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:44:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:44:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:44:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:44:29 --> Form Validation Class Initialized
INFO - 2025-05-15 13:44:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:44:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:44:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:44:29 --> Controller Class Initialized
DEBUG - 2025-05-15 13:44:29 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 13:45:51 --> Config Class Initialized
INFO - 2025-05-15 13:45:51 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:45:51 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:45:51 --> Utf8 Class Initialized
INFO - 2025-05-15 13:45:51 --> URI Class Initialized
INFO - 2025-05-15 13:45:51 --> Router Class Initialized
INFO - 2025-05-15 13:45:51 --> Output Class Initialized
INFO - 2025-05-15 13:45:51 --> Security Class Initialized
DEBUG - 2025-05-15 13:45:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:45:51 --> Input Class Initialized
INFO - 2025-05-15 13:45:51 --> Language Class Initialized
INFO - 2025-05-15 13:45:51 --> Loader Class Initialized
INFO - 2025-05-15 13:45:51 --> Helper loaded: url_helper
INFO - 2025-05-15 13:45:51 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:45:51 --> Helper loaded: form_helper
INFO - 2025-05-15 13:45:51 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:45:51 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:45:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:45:51 --> Form Validation Class Initialized
INFO - 2025-05-15 13:45:51 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:45:51 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:45:51 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:45:51 --> Controller Class Initialized
INFO - 2025-05-15 13:45:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:45:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:45:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:45:51 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:45:51 --> Final output sent to browser
DEBUG - 2025-05-15 13:45:51 --> Total execution time: 0.0198
INFO - 2025-05-15 13:45:53 --> Config Class Initialized
INFO - 2025-05-15 13:45:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:45:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:45:53 --> Utf8 Class Initialized
INFO - 2025-05-15 13:45:53 --> URI Class Initialized
INFO - 2025-05-15 13:45:53 --> Router Class Initialized
INFO - 2025-05-15 13:45:53 --> Output Class Initialized
INFO - 2025-05-15 13:45:53 --> Security Class Initialized
DEBUG - 2025-05-15 13:45:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:45:53 --> Input Class Initialized
INFO - 2025-05-15 13:45:53 --> Language Class Initialized
INFO - 2025-05-15 13:45:53 --> Loader Class Initialized
INFO - 2025-05-15 13:45:53 --> Helper loaded: url_helper
INFO - 2025-05-15 13:45:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:45:53 --> Helper loaded: form_helper
INFO - 2025-05-15 13:45:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:45:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:45:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:45:53 --> Form Validation Class Initialized
INFO - 2025-05-15 13:45:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:45:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:45:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:45:53 --> Controller Class Initialized
INFO - 2025-05-15 13:45:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:45:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:45:53 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:45:53 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:45:53 --> Final output sent to browser
DEBUG - 2025-05-15 13:45:53 --> Total execution time: 0.0415
INFO - 2025-05-15 13:46:23 --> Config Class Initialized
INFO - 2025-05-15 13:46:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:46:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:46:23 --> Utf8 Class Initialized
INFO - 2025-05-15 13:46:23 --> URI Class Initialized
INFO - 2025-05-15 13:46:23 --> Router Class Initialized
INFO - 2025-05-15 13:46:23 --> Output Class Initialized
INFO - 2025-05-15 13:46:23 --> Security Class Initialized
DEBUG - 2025-05-15 13:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:46:23 --> Input Class Initialized
INFO - 2025-05-15 13:46:23 --> Language Class Initialized
INFO - 2025-05-15 13:46:23 --> Loader Class Initialized
INFO - 2025-05-15 13:46:23 --> Helper loaded: url_helper
INFO - 2025-05-15 13:46:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:46:23 --> Helper loaded: form_helper
INFO - 2025-05-15 13:46:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:46:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:46:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:46:23 --> Form Validation Class Initialized
INFO - 2025-05-15 13:46:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:46:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:46:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:46:23 --> Controller Class Initialized
INFO - 2025-05-15 13:46:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:46:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:46:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:46:23 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:46:23 --> Final output sent to browser
DEBUG - 2025-05-15 13:46:23 --> Total execution time: 0.0098
INFO - 2025-05-15 13:47:07 --> Config Class Initialized
INFO - 2025-05-15 13:47:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:47:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:47:07 --> Utf8 Class Initialized
INFO - 2025-05-15 13:47:07 --> URI Class Initialized
INFO - 2025-05-15 13:47:07 --> Router Class Initialized
INFO - 2025-05-15 13:47:07 --> Output Class Initialized
INFO - 2025-05-15 13:47:07 --> Security Class Initialized
DEBUG - 2025-05-15 13:47:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:47:07 --> Input Class Initialized
INFO - 2025-05-15 13:47:07 --> Language Class Initialized
INFO - 2025-05-15 13:47:07 --> Loader Class Initialized
INFO - 2025-05-15 13:47:07 --> Helper loaded: url_helper
INFO - 2025-05-15 13:47:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:47:07 --> Helper loaded: form_helper
INFO - 2025-05-15 13:47:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:47:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:47:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:47:07 --> Form Validation Class Initialized
INFO - 2025-05-15 13:47:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:47:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:47:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:47:07 --> Controller Class Initialized
INFO - 2025-05-15 13:47:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:47:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:47:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:47:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:47:07 --> Final output sent to browser
DEBUG - 2025-05-15 13:47:07 --> Total execution time: 0.0208
INFO - 2025-05-15 13:49:37 --> Config Class Initialized
INFO - 2025-05-15 13:49:37 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:49:37 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:49:37 --> Utf8 Class Initialized
INFO - 2025-05-15 13:49:37 --> URI Class Initialized
INFO - 2025-05-15 13:49:37 --> Router Class Initialized
INFO - 2025-05-15 13:49:37 --> Output Class Initialized
INFO - 2025-05-15 13:49:37 --> Security Class Initialized
DEBUG - 2025-05-15 13:49:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:49:37 --> Input Class Initialized
INFO - 2025-05-15 13:49:37 --> Language Class Initialized
INFO - 2025-05-15 13:49:37 --> Loader Class Initialized
INFO - 2025-05-15 13:49:37 --> Helper loaded: url_helper
INFO - 2025-05-15 13:49:37 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:49:37 --> Helper loaded: form_helper
INFO - 2025-05-15 13:49:37 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:49:37 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:49:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:49:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:49:37 --> Form Validation Class Initialized
INFO - 2025-05-15 13:49:37 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:49:37 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:49:37 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:49:37 --> Controller Class Initialized
INFO - 2025-05-15 13:49:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:49:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:49:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:49:37 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:49:37 --> Final output sent to browser
DEBUG - 2025-05-15 13:49:37 --> Total execution time: 0.0426
INFO - 2025-05-15 13:49:42 --> Config Class Initialized
INFO - 2025-05-15 13:49:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:49:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:49:42 --> Utf8 Class Initialized
INFO - 2025-05-15 13:49:42 --> URI Class Initialized
INFO - 2025-05-15 13:49:42 --> Router Class Initialized
INFO - 2025-05-15 13:49:42 --> Output Class Initialized
INFO - 2025-05-15 13:49:42 --> Security Class Initialized
DEBUG - 2025-05-15 13:49:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:49:42 --> Input Class Initialized
INFO - 2025-05-15 13:49:42 --> Language Class Initialized
INFO - 2025-05-15 13:49:42 --> Loader Class Initialized
INFO - 2025-05-15 13:49:42 --> Helper loaded: url_helper
INFO - 2025-05-15 13:49:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:49:42 --> Helper loaded: form_helper
INFO - 2025-05-15 13:49:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:49:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:49:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:49:42 --> Form Validation Class Initialized
INFO - 2025-05-15 13:49:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:49:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:49:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:49:42 --> Controller Class Initialized
INFO - 2025-05-15 13:49:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:49:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:49:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:49:42 --> Final output sent to browser
DEBUG - 2025-05-15 13:49:42 --> Total execution time: 0.0093
INFO - 2025-05-15 13:49:43 --> Config Class Initialized
INFO - 2025-05-15 13:49:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:49:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:49:43 --> Utf8 Class Initialized
INFO - 2025-05-15 13:49:43 --> URI Class Initialized
INFO - 2025-05-15 13:49:43 --> Router Class Initialized
INFO - 2025-05-15 13:49:43 --> Output Class Initialized
INFO - 2025-05-15 13:49:43 --> Security Class Initialized
DEBUG - 2025-05-15 13:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:49:43 --> Input Class Initialized
INFO - 2025-05-15 13:49:43 --> Language Class Initialized
INFO - 2025-05-15 13:49:43 --> Loader Class Initialized
INFO - 2025-05-15 13:49:43 --> Helper loaded: url_helper
INFO - 2025-05-15 13:49:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:49:43 --> Helper loaded: form_helper
INFO - 2025-05-15 13:49:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:49:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:49:43 --> Form Validation Class Initialized
INFO - 2025-05-15 13:49:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:49:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:49:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:49:43 --> Controller Class Initialized
INFO - 2025-05-15 13:49:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:49:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:49:43 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:49:43 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:49:43 --> Final output sent to browser
DEBUG - 2025-05-15 13:49:43 --> Total execution time: 0.0190
INFO - 2025-05-15 13:50:20 --> Config Class Initialized
INFO - 2025-05-15 13:50:20 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:50:20 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:50:20 --> Utf8 Class Initialized
INFO - 2025-05-15 13:50:20 --> URI Class Initialized
INFO - 2025-05-15 13:50:20 --> Router Class Initialized
INFO - 2025-05-15 13:50:20 --> Output Class Initialized
INFO - 2025-05-15 13:50:20 --> Security Class Initialized
DEBUG - 2025-05-15 13:50:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:50:20 --> Input Class Initialized
INFO - 2025-05-15 13:50:20 --> Language Class Initialized
INFO - 2025-05-15 13:50:20 --> Loader Class Initialized
INFO - 2025-05-15 13:50:20 --> Helper loaded: url_helper
INFO - 2025-05-15 13:50:20 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:50:20 --> Helper loaded: form_helper
INFO - 2025-05-15 13:50:20 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:50:20 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:50:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:50:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:50:20 --> Form Validation Class Initialized
INFO - 2025-05-15 13:50:20 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:50:20 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:50:20 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:50:20 --> Controller Class Initialized
INFO - 2025-05-15 13:50:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:50:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:50:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:50:20 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:50:20 --> Final output sent to browser
DEBUG - 2025-05-15 13:50:20 --> Total execution time: 0.0258
INFO - 2025-05-15 13:51:23 --> Config Class Initialized
INFO - 2025-05-15 13:51:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:51:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:51:23 --> Utf8 Class Initialized
INFO - 2025-05-15 13:51:23 --> URI Class Initialized
INFO - 2025-05-15 13:51:23 --> Router Class Initialized
INFO - 2025-05-15 13:51:23 --> Output Class Initialized
INFO - 2025-05-15 13:51:23 --> Security Class Initialized
DEBUG - 2025-05-15 13:51:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:51:23 --> Input Class Initialized
INFO - 2025-05-15 13:51:23 --> Language Class Initialized
INFO - 2025-05-15 13:51:23 --> Loader Class Initialized
INFO - 2025-05-15 13:51:23 --> Helper loaded: url_helper
INFO - 2025-05-15 13:51:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:51:23 --> Helper loaded: form_helper
INFO - 2025-05-15 13:51:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:51:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:51:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:51:23 --> Form Validation Class Initialized
INFO - 2025-05-15 13:51:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:51:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:51:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:51:23 --> Controller Class Initialized
INFO - 2025-05-15 13:51:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:51:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:51:23 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:51:23 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:51:23 --> Final output sent to browser
DEBUG - 2025-05-15 13:51:23 --> Total execution time: 0.0197
INFO - 2025-05-15 13:51:26 --> Config Class Initialized
INFO - 2025-05-15 13:51:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:51:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:51:26 --> Utf8 Class Initialized
INFO - 2025-05-15 13:51:26 --> URI Class Initialized
INFO - 2025-05-15 13:51:26 --> Router Class Initialized
INFO - 2025-05-15 13:51:26 --> Output Class Initialized
INFO - 2025-05-15 13:51:26 --> Security Class Initialized
DEBUG - 2025-05-15 13:51:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:51:26 --> Input Class Initialized
INFO - 2025-05-15 13:51:26 --> Language Class Initialized
INFO - 2025-05-15 13:51:26 --> Loader Class Initialized
INFO - 2025-05-15 13:51:26 --> Helper loaded: url_helper
INFO - 2025-05-15 13:51:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:51:26 --> Helper loaded: form_helper
INFO - 2025-05-15 13:51:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:51:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:51:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:51:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:51:26 --> Form Validation Class Initialized
INFO - 2025-05-15 13:51:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:51:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:51:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:51:26 --> Controller Class Initialized
INFO - 2025-05-15 13:51:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:51:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:51:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:51:26 --> Final output sent to browser
DEBUG - 2025-05-15 13:51:26 --> Total execution time: 0.0087
INFO - 2025-05-15 13:51:31 --> Config Class Initialized
INFO - 2025-05-15 13:51:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:51:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:51:31 --> Utf8 Class Initialized
INFO - 2025-05-15 13:51:31 --> URI Class Initialized
INFO - 2025-05-15 13:51:31 --> Router Class Initialized
INFO - 2025-05-15 13:51:31 --> Output Class Initialized
INFO - 2025-05-15 13:51:31 --> Security Class Initialized
DEBUG - 2025-05-15 13:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:51:31 --> Input Class Initialized
INFO - 2025-05-15 13:51:31 --> Language Class Initialized
INFO - 2025-05-15 13:51:31 --> Loader Class Initialized
INFO - 2025-05-15 13:51:31 --> Helper loaded: url_helper
INFO - 2025-05-15 13:51:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:51:31 --> Helper loaded: form_helper
INFO - 2025-05-15 13:51:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:51:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:51:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:51:31 --> Form Validation Class Initialized
INFO - 2025-05-15 13:51:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:51:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:51:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:51:31 --> Controller Class Initialized
INFO - 2025-05-15 13:51:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:51:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:51:31 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:51:31 --> Final output sent to browser
DEBUG - 2025-05-15 13:51:31 --> Total execution time: 0.0190
INFO - 2025-05-15 13:51:52 --> Config Class Initialized
INFO - 2025-05-15 13:51:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:51:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:51:52 --> Utf8 Class Initialized
INFO - 2025-05-15 13:51:52 --> URI Class Initialized
INFO - 2025-05-15 13:51:52 --> Router Class Initialized
INFO - 2025-05-15 13:51:52 --> Output Class Initialized
INFO - 2025-05-15 13:51:52 --> Security Class Initialized
DEBUG - 2025-05-15 13:51:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:51:52 --> Input Class Initialized
INFO - 2025-05-15 13:51:52 --> Language Class Initialized
INFO - 2025-05-15 13:51:52 --> Loader Class Initialized
INFO - 2025-05-15 13:51:52 --> Helper loaded: url_helper
INFO - 2025-05-15 13:51:52 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:51:52 --> Helper loaded: form_helper
INFO - 2025-05-15 13:51:52 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:51:52 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:51:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:51:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:51:52 --> Form Validation Class Initialized
INFO - 2025-05-15 13:51:52 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:51:52 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:51:52 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:51:52 --> Controller Class Initialized
INFO - 2025-05-15 13:51:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:51:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:51:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:51:52 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:51:52 --> Final output sent to browser
DEBUG - 2025-05-15 13:51:52 --> Total execution time: 0.0202
INFO - 2025-05-15 13:52:00 --> Config Class Initialized
INFO - 2025-05-15 13:52:00 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:52:00 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:52:00 --> Utf8 Class Initialized
INFO - 2025-05-15 13:52:00 --> URI Class Initialized
INFO - 2025-05-15 13:52:00 --> Router Class Initialized
INFO - 2025-05-15 13:52:00 --> Output Class Initialized
INFO - 2025-05-15 13:52:00 --> Security Class Initialized
DEBUG - 2025-05-15 13:52:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:52:00 --> Input Class Initialized
INFO - 2025-05-15 13:52:00 --> Language Class Initialized
INFO - 2025-05-15 13:52:00 --> Loader Class Initialized
INFO - 2025-05-15 13:52:00 --> Helper loaded: url_helper
INFO - 2025-05-15 13:52:00 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:52:00 --> Helper loaded: form_helper
INFO - 2025-05-15 13:52:00 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:52:00 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:52:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:52:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:52:00 --> Form Validation Class Initialized
INFO - 2025-05-15 13:52:00 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:52:00 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:52:00 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:52:00 --> Controller Class Initialized
INFO - 2025-05-15 13:52:00 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:52:00 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:52:00 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:52:00 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:52:00 --> Final output sent to browser
DEBUG - 2025-05-15 13:52:00 --> Total execution time: 0.0220
INFO - 2025-05-15 13:52:01 --> Config Class Initialized
INFO - 2025-05-15 13:52:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:52:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:52:01 --> Utf8 Class Initialized
INFO - 2025-05-15 13:52:01 --> URI Class Initialized
INFO - 2025-05-15 13:52:01 --> Router Class Initialized
INFO - 2025-05-15 13:52:01 --> Output Class Initialized
INFO - 2025-05-15 13:52:01 --> Security Class Initialized
DEBUG - 2025-05-15 13:52:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:52:01 --> Input Class Initialized
INFO - 2025-05-15 13:52:01 --> Language Class Initialized
INFO - 2025-05-15 13:52:01 --> Loader Class Initialized
INFO - 2025-05-15 13:52:01 --> Helper loaded: url_helper
INFO - 2025-05-15 13:52:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:52:01 --> Helper loaded: form_helper
INFO - 2025-05-15 13:52:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:52:01 --> Database Driver Class Initialized
INFO - 2025-05-15 13:52:01 --> Config Class Initialized
INFO - 2025-05-15 13:52:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:52:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:52:01 --> Utf8 Class Initialized
INFO - 2025-05-15 13:52:01 --> URI Class Initialized
INFO - 2025-05-15 13:52:01 --> Router Class Initialized
INFO - 2025-05-15 13:52:01 --> Output Class Initialized
INFO - 2025-05-15 13:52:01 --> Security Class Initialized
DEBUG - 2025-05-15 13:52:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:52:01 --> Input Class Initialized
INFO - 2025-05-15 13:52:01 --> Language Class Initialized
INFO - 2025-05-15 13:52:01 --> Loader Class Initialized
INFO - 2025-05-15 13:52:01 --> Helper loaded: url_helper
INFO - 2025-05-15 13:52:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:52:01 --> Helper loaded: form_helper
INFO - 2025-05-15 13:52:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:52:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:52:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:52:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:52:01 --> Form Validation Class Initialized
INFO - 2025-05-15 13:52:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:52:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:52:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:52:01 --> Controller Class Initialized
INFO - 2025-05-15 13:52:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:52:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:52:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
DEBUG - 2025-05-15 13:52:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:52:01 --> Final output sent to browser
DEBUG - 2025-05-15 13:52:01 --> Total execution time: 0.0093
INFO - 2025-05-15 13:52:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:52:01 --> Form Validation Class Initialized
INFO - 2025-05-15 13:52:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:52:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:52:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:52:01 --> Controller Class Initialized
INFO - 2025-05-15 13:52:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:52:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:52:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 13:52:01 --> Final output sent to browser
DEBUG - 2025-05-15 13:52:01 --> Total execution time: 0.0095
INFO - 2025-05-15 13:52:07 --> Config Class Initialized
INFO - 2025-05-15 13:52:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:52:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:52:07 --> Utf8 Class Initialized
INFO - 2025-05-15 13:52:07 --> URI Class Initialized
INFO - 2025-05-15 13:52:07 --> Router Class Initialized
INFO - 2025-05-15 13:52:07 --> Output Class Initialized
INFO - 2025-05-15 13:52:07 --> Security Class Initialized
DEBUG - 2025-05-15 13:52:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:52:07 --> Input Class Initialized
INFO - 2025-05-15 13:52:07 --> Language Class Initialized
INFO - 2025-05-15 13:52:07 --> Loader Class Initialized
INFO - 2025-05-15 13:52:07 --> Helper loaded: url_helper
INFO - 2025-05-15 13:52:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:52:07 --> Helper loaded: form_helper
INFO - 2025-05-15 13:52:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:52:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:52:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:52:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:52:07 --> Form Validation Class Initialized
INFO - 2025-05-15 13:52:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:52:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:52:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:52:07 --> Controller Class Initialized
INFO - 2025-05-15 13:52:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:52:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:52:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:52:07 --> Final output sent to browser
DEBUG - 2025-05-15 13:52:07 --> Total execution time: 0.0314
INFO - 2025-05-15 13:53:48 --> Config Class Initialized
INFO - 2025-05-15 13:53:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:53:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:53:48 --> Utf8 Class Initialized
INFO - 2025-05-15 13:53:48 --> URI Class Initialized
INFO - 2025-05-15 13:53:48 --> Router Class Initialized
INFO - 2025-05-15 13:53:48 --> Output Class Initialized
INFO - 2025-05-15 13:53:48 --> Security Class Initialized
DEBUG - 2025-05-15 13:53:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:53:48 --> Input Class Initialized
INFO - 2025-05-15 13:53:48 --> Language Class Initialized
INFO - 2025-05-15 13:53:48 --> Loader Class Initialized
INFO - 2025-05-15 13:53:48 --> Helper loaded: url_helper
INFO - 2025-05-15 13:53:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:53:48 --> Helper loaded: form_helper
INFO - 2025-05-15 13:53:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:53:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:53:48 --> Form Validation Class Initialized
INFO - 2025-05-15 13:53:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:53:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:53:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:53:48 --> Controller Class Initialized
INFO - 2025-05-15 13:53:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:53:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:53:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:53:48 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:53:48 --> Final output sent to browser
DEBUG - 2025-05-15 13:53:48 --> Total execution time: 0.0103
INFO - 2025-05-15 13:53:56 --> Config Class Initialized
INFO - 2025-05-15 13:53:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:53:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:53:56 --> Utf8 Class Initialized
INFO - 2025-05-15 13:53:56 --> URI Class Initialized
INFO - 2025-05-15 13:53:56 --> Router Class Initialized
INFO - 2025-05-15 13:53:56 --> Output Class Initialized
INFO - 2025-05-15 13:53:56 --> Security Class Initialized
DEBUG - 2025-05-15 13:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:53:56 --> Input Class Initialized
INFO - 2025-05-15 13:53:56 --> Language Class Initialized
INFO - 2025-05-15 13:53:56 --> Loader Class Initialized
INFO - 2025-05-15 13:53:56 --> Helper loaded: url_helper
INFO - 2025-05-15 13:53:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:53:56 --> Helper loaded: form_helper
INFO - 2025-05-15 13:53:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:53:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:53:56 --> Form Validation Class Initialized
INFO - 2025-05-15 13:53:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:53:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:53:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:53:56 --> Controller Class Initialized
INFO - 2025-05-15 13:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:53:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:53:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/edit.php
INFO - 2025-05-15 13:53:56 --> Final output sent to browser
DEBUG - 2025-05-15 13:53:56 --> Total execution time: 0.0354
INFO - 2025-05-15 13:53:59 --> Config Class Initialized
INFO - 2025-05-15 13:53:59 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:53:59 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:53:59 --> Utf8 Class Initialized
INFO - 2025-05-15 13:53:59 --> URI Class Initialized
INFO - 2025-05-15 13:53:59 --> Router Class Initialized
INFO - 2025-05-15 13:53:59 --> Output Class Initialized
INFO - 2025-05-15 13:53:59 --> Security Class Initialized
DEBUG - 2025-05-15 13:53:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:53:59 --> Input Class Initialized
INFO - 2025-05-15 13:53:59 --> Language Class Initialized
INFO - 2025-05-15 13:53:59 --> Loader Class Initialized
INFO - 2025-05-15 13:53:59 --> Helper loaded: url_helper
INFO - 2025-05-15 13:53:59 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:53:59 --> Helper loaded: form_helper
INFO - 2025-05-15 13:53:59 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:53:59 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:53:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:53:59 --> Form Validation Class Initialized
INFO - 2025-05-15 13:53:59 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:53:59 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:53:59 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:53:59 --> Controller Class Initialized
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:53:59 --> Final output sent to browser
DEBUG - 2025-05-15 13:53:59 --> Total execution time: 0.0414
INFO - 2025-05-15 13:53:59 --> Config Class Initialized
INFO - 2025-05-15 13:53:59 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:53:59 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:53:59 --> Utf8 Class Initialized
INFO - 2025-05-15 13:53:59 --> URI Class Initialized
INFO - 2025-05-15 13:53:59 --> Router Class Initialized
INFO - 2025-05-15 13:53:59 --> Output Class Initialized
INFO - 2025-05-15 13:53:59 --> Security Class Initialized
DEBUG - 2025-05-15 13:53:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:53:59 --> Input Class Initialized
INFO - 2025-05-15 13:53:59 --> Language Class Initialized
INFO - 2025-05-15 13:53:59 --> Loader Class Initialized
INFO - 2025-05-15 13:53:59 --> Helper loaded: url_helper
INFO - 2025-05-15 13:53:59 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:53:59 --> Helper loaded: form_helper
INFO - 2025-05-15 13:53:59 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:53:59 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:53:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:53:59 --> Form Validation Class Initialized
INFO - 2025-05-15 13:53:59 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:53:59 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:53:59 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:53:59 --> Controller Class Initialized
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:53:59 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:53:59 --> Final output sent to browser
DEBUG - 2025-05-15 13:53:59 --> Total execution time: 0.0281
INFO - 2025-05-15 13:54:02 --> Config Class Initialized
INFO - 2025-05-15 13:54:02 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:54:02 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:54:02 --> Utf8 Class Initialized
INFO - 2025-05-15 13:54:02 --> URI Class Initialized
INFO - 2025-05-15 13:54:02 --> Router Class Initialized
INFO - 2025-05-15 13:54:02 --> Output Class Initialized
INFO - 2025-05-15 13:54:02 --> Security Class Initialized
DEBUG - 2025-05-15 13:54:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:54:02 --> Input Class Initialized
INFO - 2025-05-15 13:54:02 --> Language Class Initialized
INFO - 2025-05-15 13:54:02 --> Loader Class Initialized
INFO - 2025-05-15 13:54:02 --> Helper loaded: url_helper
INFO - 2025-05-15 13:54:02 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:54:02 --> Helper loaded: form_helper
INFO - 2025-05-15 13:54:02 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:54:02 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:54:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:54:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:54:02 --> Form Validation Class Initialized
INFO - 2025-05-15 13:54:02 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:54:02 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:54:02 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:54:02 --> Controller Class Initialized
INFO - 2025-05-15 13:54:02 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:54:02 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:54:02 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:54:02 --> Final output sent to browser
DEBUG - 2025-05-15 13:54:02 --> Total execution time: 0.0097
INFO - 2025-05-15 13:54:04 --> Config Class Initialized
INFO - 2025-05-15 13:54:04 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:54:04 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:54:04 --> Utf8 Class Initialized
INFO - 2025-05-15 13:54:04 --> URI Class Initialized
INFO - 2025-05-15 13:54:04 --> Router Class Initialized
INFO - 2025-05-15 13:54:04 --> Output Class Initialized
INFO - 2025-05-15 13:54:04 --> Security Class Initialized
DEBUG - 2025-05-15 13:54:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:54:04 --> Input Class Initialized
INFO - 2025-05-15 13:54:04 --> Language Class Initialized
INFO - 2025-05-15 13:54:04 --> Loader Class Initialized
INFO - 2025-05-15 13:54:04 --> Helper loaded: url_helper
INFO - 2025-05-15 13:54:04 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:54:04 --> Helper loaded: form_helper
INFO - 2025-05-15 13:54:04 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:54:04 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:54:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:54:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:54:04 --> Form Validation Class Initialized
INFO - 2025-05-15 13:54:04 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:54:04 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:54:04 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:54:04 --> Controller Class Initialized
INFO - 2025-05-15 13:54:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:54:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:54:04 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:54:04 --> Final output sent to browser
DEBUG - 2025-05-15 13:54:04 --> Total execution time: 0.0120
INFO - 2025-05-15 13:54:47 --> Config Class Initialized
INFO - 2025-05-15 13:54:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:54:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:54:47 --> Utf8 Class Initialized
INFO - 2025-05-15 13:54:47 --> URI Class Initialized
INFO - 2025-05-15 13:54:47 --> Router Class Initialized
INFO - 2025-05-15 13:54:47 --> Output Class Initialized
INFO - 2025-05-15 13:54:47 --> Security Class Initialized
DEBUG - 2025-05-15 13:54:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:54:47 --> Input Class Initialized
INFO - 2025-05-15 13:54:47 --> Language Class Initialized
INFO - 2025-05-15 13:54:47 --> Loader Class Initialized
INFO - 2025-05-15 13:54:47 --> Helper loaded: url_helper
INFO - 2025-05-15 13:54:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:54:47 --> Helper loaded: form_helper
INFO - 2025-05-15 13:54:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:54:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:54:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:54:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:54:47 --> Form Validation Class Initialized
INFO - 2025-05-15 13:54:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:54:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:54:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:54:47 --> Controller Class Initialized
INFO - 2025-05-15 13:54:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:54:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:54:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:54:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:54:47 --> Final output sent to browser
DEBUG - 2025-05-15 13:54:47 --> Total execution time: 0.0100
INFO - 2025-05-15 13:54:48 --> Config Class Initialized
INFO - 2025-05-15 13:54:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:54:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:54:48 --> Utf8 Class Initialized
INFO - 2025-05-15 13:54:48 --> URI Class Initialized
INFO - 2025-05-15 13:54:48 --> Router Class Initialized
INFO - 2025-05-15 13:54:48 --> Output Class Initialized
INFO - 2025-05-15 13:54:48 --> Security Class Initialized
DEBUG - 2025-05-15 13:54:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:54:48 --> Input Class Initialized
INFO - 2025-05-15 13:54:48 --> Language Class Initialized
INFO - 2025-05-15 13:54:48 --> Loader Class Initialized
INFO - 2025-05-15 13:54:48 --> Helper loaded: url_helper
INFO - 2025-05-15 13:54:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:54:48 --> Helper loaded: form_helper
INFO - 2025-05-15 13:54:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:54:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:54:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:54:48 --> Form Validation Class Initialized
INFO - 2025-05-15 13:54:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:54:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:54:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:54:48 --> Controller Class Initialized
INFO - 2025-05-15 13:54:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:54:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:54:48 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 13:54:48 --> Final output sent to browser
DEBUG - 2025-05-15 13:54:48 --> Total execution time: 0.0156
INFO - 2025-05-15 13:54:57 --> Config Class Initialized
INFO - 2025-05-15 13:54:57 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:54:57 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:54:57 --> Utf8 Class Initialized
INFO - 2025-05-15 13:54:57 --> URI Class Initialized
INFO - 2025-05-15 13:54:57 --> Router Class Initialized
INFO - 2025-05-15 13:54:57 --> Output Class Initialized
INFO - 2025-05-15 13:54:57 --> Security Class Initialized
DEBUG - 2025-05-15 13:54:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:54:57 --> Input Class Initialized
INFO - 2025-05-15 13:54:57 --> Language Class Initialized
INFO - 2025-05-15 13:54:57 --> Loader Class Initialized
INFO - 2025-05-15 13:54:57 --> Helper loaded: url_helper
INFO - 2025-05-15 13:54:57 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:54:57 --> Helper loaded: form_helper
INFO - 2025-05-15 13:54:57 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:54:57 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:54:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:54:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:54:57 --> Form Validation Class Initialized
INFO - 2025-05-15 13:54:57 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:54:57 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:54:57 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:54:57 --> Controller Class Initialized
INFO - 2025-05-15 13:54:57 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:54:57 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:54:57 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:54:57 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:54:57 --> Final output sent to browser
DEBUG - 2025-05-15 13:54:57 --> Total execution time: 0.0102
INFO - 2025-05-15 13:55:15 --> Config Class Initialized
INFO - 2025-05-15 13:55:15 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:55:15 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:55:15 --> Utf8 Class Initialized
INFO - 2025-05-15 13:55:15 --> URI Class Initialized
INFO - 2025-05-15 13:55:15 --> Router Class Initialized
INFO - 2025-05-15 13:55:15 --> Output Class Initialized
INFO - 2025-05-15 13:55:15 --> Security Class Initialized
DEBUG - 2025-05-15 13:55:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:55:15 --> Input Class Initialized
INFO - 2025-05-15 13:55:15 --> Language Class Initialized
INFO - 2025-05-15 13:55:15 --> Loader Class Initialized
INFO - 2025-05-15 13:55:15 --> Helper loaded: url_helper
INFO - 2025-05-15 13:55:15 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:55:15 --> Helper loaded: form_helper
INFO - 2025-05-15 13:55:15 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:55:15 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:55:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:55:15 --> Form Validation Class Initialized
INFO - 2025-05-15 13:55:15 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:55:15 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:55:15 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:55:15 --> Controller Class Initialized
INFO - 2025-05-15 13:55:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:55:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:55:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:55:15 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:55:15 --> Final output sent to browser
DEBUG - 2025-05-15 13:55:15 --> Total execution time: 0.0210
INFO - 2025-05-15 13:57:29 --> Config Class Initialized
INFO - 2025-05-15 13:57:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 13:57:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 13:57:29 --> Utf8 Class Initialized
INFO - 2025-05-15 13:57:29 --> URI Class Initialized
INFO - 2025-05-15 13:57:29 --> Router Class Initialized
INFO - 2025-05-15 13:57:29 --> Output Class Initialized
INFO - 2025-05-15 13:57:29 --> Security Class Initialized
DEBUG - 2025-05-15 13:57:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 13:57:29 --> Input Class Initialized
INFO - 2025-05-15 13:57:29 --> Language Class Initialized
INFO - 2025-05-15 13:57:29 --> Loader Class Initialized
INFO - 2025-05-15 13:57:29 --> Helper loaded: url_helper
INFO - 2025-05-15 13:57:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 13:57:29 --> Helper loaded: form_helper
INFO - 2025-05-15 13:57:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 13:57:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 13:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 13:57:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 13:57:29 --> Form Validation Class Initialized
INFO - 2025-05-15 13:57:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 13:57:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 13:57:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 13:57:29 --> Controller Class Initialized
INFO - 2025-05-15 13:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 13:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 13:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 13:57:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 13:57:29 --> Final output sent to browser
DEBUG - 2025-05-15 13:57:29 --> Total execution time: 0.0095
INFO - 2025-05-15 14:00:32 --> Config Class Initialized
INFO - 2025-05-15 14:00:32 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:32 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:32 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:32 --> URI Class Initialized
INFO - 2025-05-15 14:00:32 --> Router Class Initialized
INFO - 2025-05-15 14:00:32 --> Output Class Initialized
INFO - 2025-05-15 14:00:32 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:32 --> Input Class Initialized
INFO - 2025-05-15 14:00:32 --> Language Class Initialized
INFO - 2025-05-15 14:00:32 --> Loader Class Initialized
INFO - 2025-05-15 14:00:32 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:32 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:32 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:32 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:32 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:32 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:32 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:32 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:32 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:32 --> Controller Class Initialized
INFO - 2025-05-15 14:00:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:32 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:32 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:32 --> Total execution time: 0.0135
INFO - 2025-05-15 14:00:33 --> Config Class Initialized
INFO - 2025-05-15 14:00:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:33 --> URI Class Initialized
INFO - 2025-05-15 14:00:33 --> Router Class Initialized
INFO - 2025-05-15 14:00:33 --> Output Class Initialized
INFO - 2025-05-15 14:00:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:33 --> Input Class Initialized
INFO - 2025-05-15 14:00:33 --> Language Class Initialized
INFO - 2025-05-15 14:00:33 --> Loader Class Initialized
INFO - 2025-05-15 14:00:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:33 --> Controller Class Initialized
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:33 --> Total execution time: 0.0137
INFO - 2025-05-15 14:00:33 --> Config Class Initialized
INFO - 2025-05-15 14:00:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:33 --> URI Class Initialized
INFO - 2025-05-15 14:00:33 --> Router Class Initialized
INFO - 2025-05-15 14:00:33 --> Output Class Initialized
INFO - 2025-05-15 14:00:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:33 --> Input Class Initialized
INFO - 2025-05-15 14:00:33 --> Language Class Initialized
INFO - 2025-05-15 14:00:33 --> Loader Class Initialized
INFO - 2025-05-15 14:00:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:33 --> Controller Class Initialized
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:33 --> Total execution time: 0.0407
INFO - 2025-05-15 14:00:33 --> Config Class Initialized
INFO - 2025-05-15 14:00:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:33 --> URI Class Initialized
INFO - 2025-05-15 14:00:33 --> Router Class Initialized
INFO - 2025-05-15 14:00:33 --> Output Class Initialized
INFO - 2025-05-15 14:00:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:33 --> Input Class Initialized
INFO - 2025-05-15 14:00:33 --> Language Class Initialized
INFO - 2025-05-15 14:00:33 --> Loader Class Initialized
INFO - 2025-05-15 14:00:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:33 --> Controller Class Initialized
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:33 --> Total execution time: 0.0269
INFO - 2025-05-15 14:00:33 --> Config Class Initialized
INFO - 2025-05-15 14:00:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:33 --> URI Class Initialized
INFO - 2025-05-15 14:00:33 --> Router Class Initialized
INFO - 2025-05-15 14:00:33 --> Output Class Initialized
INFO - 2025-05-15 14:00:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:33 --> Input Class Initialized
INFO - 2025-05-15 14:00:33 --> Language Class Initialized
INFO - 2025-05-15 14:00:33 --> Loader Class Initialized
INFO - 2025-05-15 14:00:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:33 --> Controller Class Initialized
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:33 --> Total execution time: 0.0091
INFO - 2025-05-15 14:00:41 --> Config Class Initialized
INFO - 2025-05-15 14:00:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:41 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:41 --> URI Class Initialized
INFO - 2025-05-15 14:00:41 --> Router Class Initialized
INFO - 2025-05-15 14:00:41 --> Output Class Initialized
INFO - 2025-05-15 14:00:41 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:41 --> Input Class Initialized
INFO - 2025-05-15 14:00:41 --> Language Class Initialized
INFO - 2025-05-15 14:00:41 --> Loader Class Initialized
INFO - 2025-05-15 14:00:41 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:41 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:41 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:41 --> Controller Class Initialized
INFO - 2025-05-15 14:00:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:41 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:41 --> Total execution time: 0.0301
INFO - 2025-05-15 14:00:48 --> Config Class Initialized
INFO - 2025-05-15 14:00:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:48 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:48 --> URI Class Initialized
INFO - 2025-05-15 14:00:48 --> Router Class Initialized
INFO - 2025-05-15 14:00:48 --> Output Class Initialized
INFO - 2025-05-15 14:00:48 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:48 --> Input Class Initialized
INFO - 2025-05-15 14:00:48 --> Language Class Initialized
INFO - 2025-05-15 14:00:48 --> Loader Class Initialized
INFO - 2025-05-15 14:00:48 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:48 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:48 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:48 --> Controller Class Initialized
INFO - 2025-05-15 14:00:48 --> Config Class Initialized
INFO - 2025-05-15 14:00:48 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:48 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:48 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:48 --> URI Class Initialized
INFO - 2025-05-15 14:00:48 --> Router Class Initialized
INFO - 2025-05-15 14:00:48 --> Output Class Initialized
INFO - 2025-05-15 14:00:48 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:48 --> Input Class Initialized
INFO - 2025-05-15 14:00:48 --> Language Class Initialized
INFO - 2025-05-15 14:00:48 --> Loader Class Initialized
INFO - 2025-05-15 14:00:48 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:48 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:48 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:48 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:48 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:48 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:48 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:48 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:48 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:48 --> Controller Class Initialized
INFO - 2025-05-15 14:00:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:48 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:48 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:48 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:48 --> Total execution time: 0.0211
INFO - 2025-05-15 14:00:58 --> Config Class Initialized
INFO - 2025-05-15 14:00:58 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:58 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:58 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:58 --> URI Class Initialized
INFO - 2025-05-15 14:00:58 --> Router Class Initialized
INFO - 2025-05-15 14:00:58 --> Output Class Initialized
INFO - 2025-05-15 14:00:58 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:58 --> Input Class Initialized
INFO - 2025-05-15 14:00:58 --> Language Class Initialized
INFO - 2025-05-15 14:00:58 --> Loader Class Initialized
INFO - 2025-05-15 14:00:58 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:58 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:58 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:58 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:58 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:58 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:58 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:58 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:58 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:58 --> Controller Class Initialized
INFO - 2025-05-15 14:00:58 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:00:58 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:00:58 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:00:58 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:00:58 --> Final output sent to browser
DEBUG - 2025-05-15 14:00:58 --> Total execution time: 0.0255
INFO - 2025-05-15 14:00:59 --> Config Class Initialized
INFO - 2025-05-15 14:00:59 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:00:59 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:00:59 --> Utf8 Class Initialized
INFO - 2025-05-15 14:00:59 --> URI Class Initialized
INFO - 2025-05-15 14:00:59 --> Router Class Initialized
INFO - 2025-05-15 14:00:59 --> Output Class Initialized
INFO - 2025-05-15 14:00:59 --> Security Class Initialized
DEBUG - 2025-05-15 14:00:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:00:59 --> Input Class Initialized
INFO - 2025-05-15 14:00:59 --> Language Class Initialized
INFO - 2025-05-15 14:00:59 --> Loader Class Initialized
INFO - 2025-05-15 14:00:59 --> Helper loaded: url_helper
INFO - 2025-05-15 14:00:59 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:00:59 --> Helper loaded: form_helper
INFO - 2025-05-15 14:00:59 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:00:59 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:00:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:00:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:00:59 --> Form Validation Class Initialized
INFO - 2025-05-15 14:00:59 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:00:59 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:00:59 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:00:59 --> Controller Class Initialized
INFO - 2025-05-15 14:01:26 --> Config Class Initialized
INFO - 2025-05-15 14:01:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:01:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:01:26 --> Utf8 Class Initialized
INFO - 2025-05-15 14:01:26 --> URI Class Initialized
INFO - 2025-05-15 14:01:26 --> Router Class Initialized
INFO - 2025-05-15 14:01:26 --> Output Class Initialized
INFO - 2025-05-15 14:01:26 --> Security Class Initialized
DEBUG - 2025-05-15 14:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:01:26 --> Input Class Initialized
INFO - 2025-05-15 14:01:26 --> Language Class Initialized
INFO - 2025-05-15 14:01:26 --> Loader Class Initialized
INFO - 2025-05-15 14:01:26 --> Helper loaded: url_helper
INFO - 2025-05-15 14:01:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:01:26 --> Helper loaded: form_helper
INFO - 2025-05-15 14:01:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:01:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:01:26 --> Form Validation Class Initialized
INFO - 2025-05-15 14:01:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:01:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:01:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:01:26 --> Controller Class Initialized
INFO - 2025-05-15 14:01:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:01:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:01:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:01:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:01:26 --> Final output sent to browser
DEBUG - 2025-05-15 14:01:26 --> Total execution time: 0.0096
INFO - 2025-05-15 14:01:27 --> Config Class Initialized
INFO - 2025-05-15 14:01:27 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:01:27 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:01:27 --> Utf8 Class Initialized
INFO - 2025-05-15 14:01:27 --> URI Class Initialized
INFO - 2025-05-15 14:01:27 --> Router Class Initialized
INFO - 2025-05-15 14:01:27 --> Output Class Initialized
INFO - 2025-05-15 14:01:27 --> Security Class Initialized
DEBUG - 2025-05-15 14:01:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:01:27 --> Input Class Initialized
INFO - 2025-05-15 14:01:27 --> Language Class Initialized
INFO - 2025-05-15 14:01:27 --> Loader Class Initialized
INFO - 2025-05-15 14:01:27 --> Helper loaded: url_helper
INFO - 2025-05-15 14:01:27 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:01:27 --> Helper loaded: form_helper
INFO - 2025-05-15 14:01:27 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:01:27 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:01:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:01:27 --> Form Validation Class Initialized
INFO - 2025-05-15 14:01:27 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:01:27 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:01:27 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:01:27 --> Controller Class Initialized
INFO - 2025-05-15 14:01:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:01:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:01:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:01:27 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:01:27 --> Final output sent to browser
DEBUG - 2025-05-15 14:01:27 --> Total execution time: 0.0097
INFO - 2025-05-15 14:01:44 --> Config Class Initialized
INFO - 2025-05-15 14:01:44 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:01:44 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:01:44 --> Utf8 Class Initialized
INFO - 2025-05-15 14:01:44 --> URI Class Initialized
INFO - 2025-05-15 14:01:44 --> Router Class Initialized
INFO - 2025-05-15 14:01:44 --> Output Class Initialized
INFO - 2025-05-15 14:01:44 --> Security Class Initialized
DEBUG - 2025-05-15 14:01:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:01:44 --> Input Class Initialized
INFO - 2025-05-15 14:01:44 --> Language Class Initialized
INFO - 2025-05-15 14:01:44 --> Loader Class Initialized
INFO - 2025-05-15 14:01:44 --> Helper loaded: url_helper
INFO - 2025-05-15 14:01:44 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:01:44 --> Helper loaded: form_helper
INFO - 2025-05-15 14:01:44 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:01:44 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:01:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:01:44 --> Form Validation Class Initialized
INFO - 2025-05-15 14:01:44 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:01:44 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:01:44 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:01:44 --> Controller Class Initialized
INFO - 2025-05-15 14:01:44 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:01:44 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:01:44 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:01:44 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:01:44 --> Final output sent to browser
DEBUG - 2025-05-15 14:01:44 --> Total execution time: 0.0198
INFO - 2025-05-15 14:01:59 --> Config Class Initialized
INFO - 2025-05-15 14:01:59 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:01:59 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:01:59 --> Utf8 Class Initialized
INFO - 2025-05-15 14:01:59 --> URI Class Initialized
INFO - 2025-05-15 14:01:59 --> Router Class Initialized
INFO - 2025-05-15 14:01:59 --> Output Class Initialized
INFO - 2025-05-15 14:01:59 --> Security Class Initialized
DEBUG - 2025-05-15 14:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:01:59 --> Input Class Initialized
INFO - 2025-05-15 14:01:59 --> Language Class Initialized
INFO - 2025-05-15 14:01:59 --> Loader Class Initialized
INFO - 2025-05-15 14:01:59 --> Helper loaded: url_helper
INFO - 2025-05-15 14:01:59 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:01:59 --> Helper loaded: form_helper
INFO - 2025-05-15 14:01:59 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:01:59 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:01:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:01:59 --> Form Validation Class Initialized
INFO - 2025-05-15 14:01:59 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:01:59 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:01:59 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:01:59 --> Controller Class Initialized
INFO - 2025-05-15 14:01:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:01:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:01:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:01:59 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:01:59 --> Final output sent to browser
DEBUG - 2025-05-15 14:01:59 --> Total execution time: 0.0136
INFO - 2025-05-15 14:02:01 --> Config Class Initialized
INFO - 2025-05-15 14:02:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:02:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:02:01 --> Utf8 Class Initialized
INFO - 2025-05-15 14:02:01 --> URI Class Initialized
INFO - 2025-05-15 14:02:01 --> Router Class Initialized
INFO - 2025-05-15 14:02:01 --> Output Class Initialized
INFO - 2025-05-15 14:02:01 --> Security Class Initialized
DEBUG - 2025-05-15 14:02:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:02:01 --> Input Class Initialized
INFO - 2025-05-15 14:02:01 --> Language Class Initialized
INFO - 2025-05-15 14:02:01 --> Loader Class Initialized
INFO - 2025-05-15 14:02:01 --> Helper loaded: url_helper
INFO - 2025-05-15 14:02:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:02:01 --> Helper loaded: form_helper
INFO - 2025-05-15 14:02:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:02:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:02:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:02:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:02:01 --> Form Validation Class Initialized
INFO - 2025-05-15 14:02:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:02:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:02:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:02:01 --> Controller Class Initialized
INFO - 2025-05-15 14:03:45 --> Config Class Initialized
INFO - 2025-05-15 14:03:45 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:45 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:45 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:45 --> URI Class Initialized
INFO - 2025-05-15 14:03:45 --> Router Class Initialized
INFO - 2025-05-15 14:03:45 --> Output Class Initialized
INFO - 2025-05-15 14:03:45 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:45 --> Input Class Initialized
INFO - 2025-05-15 14:03:45 --> Language Class Initialized
INFO - 2025-05-15 14:03:45 --> Loader Class Initialized
INFO - 2025-05-15 14:03:45 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:45 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:45 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:45 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:45 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:45 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:45 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:45 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:45 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:45 --> Controller Class Initialized
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:03:45 --> Final output sent to browser
DEBUG - 2025-05-15 14:03:45 --> Total execution time: 0.0487
INFO - 2025-05-15 14:03:45 --> Config Class Initialized
INFO - 2025-05-15 14:03:45 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:45 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:45 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:45 --> URI Class Initialized
INFO - 2025-05-15 14:03:45 --> Router Class Initialized
INFO - 2025-05-15 14:03:45 --> Output Class Initialized
INFO - 2025-05-15 14:03:45 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:45 --> Input Class Initialized
INFO - 2025-05-15 14:03:45 --> Language Class Initialized
INFO - 2025-05-15 14:03:45 --> Loader Class Initialized
INFO - 2025-05-15 14:03:45 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:45 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:45 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:45 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:45 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:45 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:45 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:45 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:45 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:45 --> Controller Class Initialized
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:03:45 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:03:45 --> Final output sent to browser
DEBUG - 2025-05-15 14:03:45 --> Total execution time: 0.0099
INFO - 2025-05-15 14:03:46 --> Config Class Initialized
INFO - 2025-05-15 14:03:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:46 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:46 --> URI Class Initialized
INFO - 2025-05-15 14:03:46 --> Router Class Initialized
INFO - 2025-05-15 14:03:46 --> Output Class Initialized
INFO - 2025-05-15 14:03:46 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:46 --> Input Class Initialized
INFO - 2025-05-15 14:03:46 --> Language Class Initialized
INFO - 2025-05-15 14:03:46 --> Loader Class Initialized
INFO - 2025-05-15 14:03:46 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:46 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:46 --> Controller Class Initialized
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:03:46 --> Final output sent to browser
DEBUG - 2025-05-15 14:03:46 --> Total execution time: 0.0095
INFO - 2025-05-15 14:03:46 --> Config Class Initialized
INFO - 2025-05-15 14:03:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:46 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:46 --> URI Class Initialized
INFO - 2025-05-15 14:03:46 --> Router Class Initialized
INFO - 2025-05-15 14:03:46 --> Output Class Initialized
INFO - 2025-05-15 14:03:46 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:46 --> Input Class Initialized
INFO - 2025-05-15 14:03:46 --> Language Class Initialized
INFO - 2025-05-15 14:03:46 --> Loader Class Initialized
INFO - 2025-05-15 14:03:46 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:46 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:46 --> Controller Class Initialized
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:03:46 --> Final output sent to browser
DEBUG - 2025-05-15 14:03:46 --> Total execution time: 0.0402
INFO - 2025-05-15 14:03:46 --> Config Class Initialized
INFO - 2025-05-15 14:03:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:46 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:46 --> URI Class Initialized
INFO - 2025-05-15 14:03:46 --> Router Class Initialized
INFO - 2025-05-15 14:03:46 --> Output Class Initialized
INFO - 2025-05-15 14:03:46 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:46 --> Input Class Initialized
INFO - 2025-05-15 14:03:46 --> Language Class Initialized
INFO - 2025-05-15 14:03:46 --> Loader Class Initialized
INFO - 2025-05-15 14:03:46 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:46 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:46 --> Controller Class Initialized
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:03:46 --> Final output sent to browser
DEBUG - 2025-05-15 14:03:46 --> Total execution time: 0.0327
INFO - 2025-05-15 14:03:46 --> Config Class Initialized
INFO - 2025-05-15 14:03:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:46 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:46 --> URI Class Initialized
INFO - 2025-05-15 14:03:46 --> Router Class Initialized
INFO - 2025-05-15 14:03:46 --> Output Class Initialized
INFO - 2025-05-15 14:03:46 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:46 --> Input Class Initialized
INFO - 2025-05-15 14:03:46 --> Language Class Initialized
INFO - 2025-05-15 14:03:46 --> Loader Class Initialized
INFO - 2025-05-15 14:03:46 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:46 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:46 --> Controller Class Initialized
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:03:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:03:46 --> Final output sent to browser
DEBUG - 2025-05-15 14:03:46 --> Total execution time: 0.0406
INFO - 2025-05-15 14:03:47 --> Config Class Initialized
INFO - 2025-05-15 14:03:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:03:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:03:47 --> Utf8 Class Initialized
INFO - 2025-05-15 14:03:47 --> URI Class Initialized
INFO - 2025-05-15 14:03:47 --> Router Class Initialized
INFO - 2025-05-15 14:03:47 --> Output Class Initialized
INFO - 2025-05-15 14:03:47 --> Security Class Initialized
DEBUG - 2025-05-15 14:03:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:03:47 --> Input Class Initialized
INFO - 2025-05-15 14:03:47 --> Language Class Initialized
INFO - 2025-05-15 14:03:47 --> Loader Class Initialized
INFO - 2025-05-15 14:03:47 --> Helper loaded: url_helper
INFO - 2025-05-15 14:03:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:03:47 --> Helper loaded: form_helper
INFO - 2025-05-15 14:03:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:03:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:03:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:03:47 --> Form Validation Class Initialized
INFO - 2025-05-15 14:03:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:03:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:03:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:03:47 --> Controller Class Initialized
DEBUG - 2025-05-15 14:03:47 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Notice --> Undefined property: stdClass::$total_bayar_transaksi /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:03:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 510
ERROR - 2025-05-15 14:03:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 511
ERROR - 2025-05-15 14:03:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 512
INFO - 2025-05-15 14:04:29 --> Config Class Initialized
INFO - 2025-05-15 14:04:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:04:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:04:29 --> Utf8 Class Initialized
INFO - 2025-05-15 14:04:29 --> URI Class Initialized
INFO - 2025-05-15 14:04:29 --> Router Class Initialized
INFO - 2025-05-15 14:04:29 --> Output Class Initialized
INFO - 2025-05-15 14:04:29 --> Security Class Initialized
DEBUG - 2025-05-15 14:04:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:04:29 --> Input Class Initialized
INFO - 2025-05-15 14:04:29 --> Language Class Initialized
INFO - 2025-05-15 14:04:29 --> Loader Class Initialized
INFO - 2025-05-15 14:04:29 --> Helper loaded: url_helper
INFO - 2025-05-15 14:04:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:04:29 --> Helper loaded: form_helper
INFO - 2025-05-15 14:04:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:04:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:04:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:04:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:04:29 --> Form Validation Class Initialized
INFO - 2025-05-15 14:04:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:04:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:04:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:04:29 --> Controller Class Initialized
DEBUG - 2025-05-15 14:04:29 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 510
ERROR - 2025-05-15 14:04:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 511
ERROR - 2025-05-15 14:04:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 512
INFO - 2025-05-15 14:04:30 --> Config Class Initialized
INFO - 2025-05-15 14:04:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:04:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:04:30 --> Utf8 Class Initialized
INFO - 2025-05-15 14:04:30 --> URI Class Initialized
INFO - 2025-05-15 14:04:30 --> Router Class Initialized
INFO - 2025-05-15 14:04:30 --> Output Class Initialized
INFO - 2025-05-15 14:04:30 --> Security Class Initialized
DEBUG - 2025-05-15 14:04:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:04:30 --> Input Class Initialized
INFO - 2025-05-15 14:04:30 --> Language Class Initialized
INFO - 2025-05-15 14:04:30 --> Loader Class Initialized
INFO - 2025-05-15 14:04:30 --> Helper loaded: url_helper
INFO - 2025-05-15 14:04:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:04:30 --> Helper loaded: form_helper
INFO - 2025-05-15 14:04:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:04:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:04:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:04:30 --> Form Validation Class Initialized
INFO - 2025-05-15 14:04:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:04:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:04:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:04:30 --> Controller Class Initialized
DEBUG - 2025-05-15 14:04:30 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Notice --> Undefined property: stdClass::$total /var/www/html/codeigniter/application/controllers/Transaksi.php 481
ERROR - 2025-05-15 14:04:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 510
ERROR - 2025-05-15 14:04:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 511
ERROR - 2025-05-15 14:04:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/codeigniter/system/core/Exceptions.php:272) /var/www/html/codeigniter/application/controllers/Transaksi.php 512
INFO - 2025-05-15 14:07:09 --> Config Class Initialized
INFO - 2025-05-15 14:07:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:07:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:07:09 --> Utf8 Class Initialized
INFO - 2025-05-15 14:07:09 --> URI Class Initialized
INFO - 2025-05-15 14:07:09 --> Router Class Initialized
INFO - 2025-05-15 14:07:09 --> Output Class Initialized
INFO - 2025-05-15 14:07:09 --> Security Class Initialized
DEBUG - 2025-05-15 14:07:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:07:09 --> Input Class Initialized
INFO - 2025-05-15 14:07:09 --> Language Class Initialized
INFO - 2025-05-15 14:07:09 --> Loader Class Initialized
INFO - 2025-05-15 14:07:09 --> Helper loaded: url_helper
INFO - 2025-05-15 14:07:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:07:09 --> Helper loaded: form_helper
INFO - 2025-05-15 14:07:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:07:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:07:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:07:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:07:09 --> Form Validation Class Initialized
INFO - 2025-05-15 14:07:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:07:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:07:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:07:09 --> Controller Class Initialized
ERROR - 2025-05-15 14:07:09 --> Unable to load the requested class: Spreadsheet
INFO - 2025-05-15 14:07:10 --> Config Class Initialized
INFO - 2025-05-15 14:07:10 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:07:10 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:07:10 --> Utf8 Class Initialized
INFO - 2025-05-15 14:07:10 --> URI Class Initialized
INFO - 2025-05-15 14:07:10 --> Router Class Initialized
INFO - 2025-05-15 14:07:10 --> Output Class Initialized
INFO - 2025-05-15 14:07:10 --> Security Class Initialized
DEBUG - 2025-05-15 14:07:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:07:10 --> Input Class Initialized
INFO - 2025-05-15 14:07:10 --> Language Class Initialized
INFO - 2025-05-15 14:07:10 --> Loader Class Initialized
INFO - 2025-05-15 14:07:10 --> Helper loaded: url_helper
INFO - 2025-05-15 14:07:10 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:07:10 --> Helper loaded: form_helper
INFO - 2025-05-15 14:07:10 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:07:10 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:07:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:07:10 --> Form Validation Class Initialized
INFO - 2025-05-15 14:07:10 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:07:10 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:07:10 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:07:10 --> Controller Class Initialized
INFO - 2025-05-15 14:07:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:07:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:07:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:07:10 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:07:10 --> Final output sent to browser
DEBUG - 2025-05-15 14:07:10 --> Total execution time: 0.0177
INFO - 2025-05-15 14:07:12 --> Config Class Initialized
INFO - 2025-05-15 14:07:12 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:07:12 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:07:12 --> Utf8 Class Initialized
INFO - 2025-05-15 14:07:12 --> URI Class Initialized
INFO - 2025-05-15 14:07:12 --> Router Class Initialized
INFO - 2025-05-15 14:07:12 --> Output Class Initialized
INFO - 2025-05-15 14:07:12 --> Security Class Initialized
DEBUG - 2025-05-15 14:07:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:07:12 --> Input Class Initialized
INFO - 2025-05-15 14:07:12 --> Language Class Initialized
INFO - 2025-05-15 14:07:12 --> Loader Class Initialized
INFO - 2025-05-15 14:07:12 --> Helper loaded: url_helper
INFO - 2025-05-15 14:07:12 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:07:12 --> Helper loaded: form_helper
INFO - 2025-05-15 14:07:12 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:07:12 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:07:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:07:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:07:12 --> Form Validation Class Initialized
INFO - 2025-05-15 14:07:12 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:07:12 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:07:12 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:07:12 --> Controller Class Initialized
INFO - 2025-05-15 14:07:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:07:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:07:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:07:12 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:07:12 --> Final output sent to browser
DEBUG - 2025-05-15 14:07:12 --> Total execution time: 0.0098
INFO - 2025-05-15 14:07:13 --> Config Class Initialized
INFO - 2025-05-15 14:07:13 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:07:13 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:07:13 --> Utf8 Class Initialized
INFO - 2025-05-15 14:07:13 --> URI Class Initialized
INFO - 2025-05-15 14:07:13 --> Router Class Initialized
INFO - 2025-05-15 14:07:13 --> Output Class Initialized
INFO - 2025-05-15 14:07:13 --> Security Class Initialized
DEBUG - 2025-05-15 14:07:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:07:13 --> Input Class Initialized
INFO - 2025-05-15 14:07:13 --> Language Class Initialized
INFO - 2025-05-15 14:07:13 --> Loader Class Initialized
INFO - 2025-05-15 14:07:13 --> Helper loaded: url_helper
INFO - 2025-05-15 14:07:13 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:07:13 --> Helper loaded: form_helper
INFO - 2025-05-15 14:07:13 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:07:13 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:07:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:07:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:07:13 --> Form Validation Class Initialized
INFO - 2025-05-15 14:07:13 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:07:13 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:07:13 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:07:13 --> Controller Class Initialized
ERROR - 2025-05-15 14:07:13 --> Unable to load the requested class: Spreadsheet
INFO - 2025-05-15 14:08:41 --> Config Class Initialized
INFO - 2025-05-15 14:08:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:08:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:08:41 --> Utf8 Class Initialized
INFO - 2025-05-15 14:08:41 --> URI Class Initialized
INFO - 2025-05-15 14:08:41 --> Router Class Initialized
INFO - 2025-05-15 14:08:41 --> Output Class Initialized
INFO - 2025-05-15 14:08:41 --> Security Class Initialized
DEBUG - 2025-05-15 14:08:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:08:41 --> Input Class Initialized
INFO - 2025-05-15 14:08:41 --> Language Class Initialized
INFO - 2025-05-15 14:08:41 --> Loader Class Initialized
INFO - 2025-05-15 14:08:41 --> Helper loaded: url_helper
INFO - 2025-05-15 14:08:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:08:41 --> Helper loaded: form_helper
INFO - 2025-05-15 14:08:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:08:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:08:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:08:41 --> Form Validation Class Initialized
INFO - 2025-05-15 14:08:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:08:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:08:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:08:41 --> Controller Class Initialized
ERROR - 2025-05-15 14:08:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;15-05-2025&quot;
LINE 27: AND DATE(t.tanggal) &lt;= '15-05-2025'
                                ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 14:08:41 --> Query error: ERROR:  date/time field value out of range: "15-05-2025"
LINE 27: AND DATE(t.tanggal) <= '15-05-2025'
                                ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '01-05-2025'
AND DATE(t.tanggal) <= '15-05-2025'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:08:41 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 14:08:56 --> Config Class Initialized
INFO - 2025-05-15 14:08:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:08:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:08:56 --> Utf8 Class Initialized
INFO - 2025-05-15 14:08:56 --> URI Class Initialized
INFO - 2025-05-15 14:08:56 --> Router Class Initialized
INFO - 2025-05-15 14:08:56 --> Output Class Initialized
INFO - 2025-05-15 14:08:56 --> Security Class Initialized
DEBUG - 2025-05-15 14:08:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:08:56 --> Input Class Initialized
INFO - 2025-05-15 14:08:56 --> Language Class Initialized
INFO - 2025-05-15 14:08:56 --> Loader Class Initialized
INFO - 2025-05-15 14:08:56 --> Helper loaded: url_helper
INFO - 2025-05-15 14:08:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:08:56 --> Helper loaded: form_helper
INFO - 2025-05-15 14:08:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:08:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:08:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:08:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:08:56 --> Form Validation Class Initialized
INFO - 2025-05-15 14:08:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:08:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:08:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:08:56 --> Controller Class Initialized
INFO - 2025-05-15 14:08:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:08:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:08:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:08:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:08:56 --> Final output sent to browser
DEBUG - 2025-05-15 14:08:56 --> Total execution time: 0.0465
INFO - 2025-05-15 14:08:57 --> Config Class Initialized
INFO - 2025-05-15 14:08:57 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:08:57 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:08:57 --> Utf8 Class Initialized
INFO - 2025-05-15 14:08:57 --> URI Class Initialized
INFO - 2025-05-15 14:08:57 --> Router Class Initialized
INFO - 2025-05-15 14:08:57 --> Output Class Initialized
INFO - 2025-05-15 14:08:57 --> Security Class Initialized
DEBUG - 2025-05-15 14:08:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:08:57 --> Input Class Initialized
INFO - 2025-05-15 14:08:57 --> Language Class Initialized
INFO - 2025-05-15 14:08:57 --> Loader Class Initialized
INFO - 2025-05-15 14:08:57 --> Helper loaded: url_helper
INFO - 2025-05-15 14:08:57 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:08:57 --> Helper loaded: form_helper
INFO - 2025-05-15 14:08:57 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:08:57 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:08:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:08:57 --> Form Validation Class Initialized
INFO - 2025-05-15 14:08:57 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:08:57 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:08:57 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:08:57 --> Controller Class Initialized
INFO - 2025-05-15 14:09:33 --> Config Class Initialized
INFO - 2025-05-15 14:09:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:09:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:09:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:09:33 --> URI Class Initialized
INFO - 2025-05-15 14:09:33 --> Router Class Initialized
INFO - 2025-05-15 14:09:33 --> Output Class Initialized
INFO - 2025-05-15 14:09:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:09:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:09:33 --> Input Class Initialized
INFO - 2025-05-15 14:09:33 --> Language Class Initialized
INFO - 2025-05-15 14:09:33 --> Loader Class Initialized
INFO - 2025-05-15 14:09:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:09:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:09:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:09:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:09:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:09:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:09:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:09:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:09:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:09:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:09:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:09:33 --> Controller Class Initialized
INFO - 2025-05-15 14:09:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:09:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:09:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:09:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:09:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:09:33 --> Total execution time: 0.0200
INFO - 2025-05-15 14:09:34 --> Config Class Initialized
INFO - 2025-05-15 14:09:34 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:09:34 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:09:34 --> Utf8 Class Initialized
INFO - 2025-05-15 14:09:34 --> URI Class Initialized
INFO - 2025-05-15 14:09:34 --> Router Class Initialized
INFO - 2025-05-15 14:09:34 --> Output Class Initialized
INFO - 2025-05-15 14:09:34 --> Security Class Initialized
DEBUG - 2025-05-15 14:09:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:09:34 --> Input Class Initialized
INFO - 2025-05-15 14:09:34 --> Language Class Initialized
INFO - 2025-05-15 14:09:34 --> Loader Class Initialized
INFO - 2025-05-15 14:09:34 --> Helper loaded: url_helper
INFO - 2025-05-15 14:09:34 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:09:34 --> Helper loaded: form_helper
INFO - 2025-05-15 14:09:34 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:09:34 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:09:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:09:34 --> Form Validation Class Initialized
INFO - 2025-05-15 14:09:34 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:09:34 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:09:34 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:09:34 --> Controller Class Initialized
DEBUG - 2025-05-15 14:09:34 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:11:28 --> Config Class Initialized
INFO - 2025-05-15 14:11:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:11:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:11:28 --> Utf8 Class Initialized
INFO - 2025-05-15 14:11:28 --> URI Class Initialized
INFO - 2025-05-15 14:11:28 --> Router Class Initialized
INFO - 2025-05-15 14:11:28 --> Output Class Initialized
INFO - 2025-05-15 14:11:28 --> Security Class Initialized
DEBUG - 2025-05-15 14:11:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:11:28 --> Input Class Initialized
INFO - 2025-05-15 14:11:28 --> Language Class Initialized
INFO - 2025-05-15 14:11:28 --> Loader Class Initialized
INFO - 2025-05-15 14:11:28 --> Helper loaded: url_helper
INFO - 2025-05-15 14:11:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:11:28 --> Helper loaded: form_helper
INFO - 2025-05-15 14:11:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:11:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:11:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:11:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:11:28 --> Form Validation Class Initialized
INFO - 2025-05-15 14:11:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:11:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:11:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:11:28 --> Controller Class Initialized
ERROR - 2025-05-15 14:11:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dt.diskon does not exist
LINE 13:             COALESCE(dt.diskon, 0) + 
                              ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 14:11:28 --> Query error: ERROR:  column dt.diskon does not exist
LINE 13:             COALESCE(dt.diskon, 0) + 
                              ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
    SELECT 
        dt.transaksi_id,
        string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
            ', '
        ) AS barang_dibeli,
        SUM(
            COALESCE(dt.diskon, 0) + 
            (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
        ) AS total_diskon,
        SUM(
            dt.total - (
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            )
        ) AS total_setelah_diskon
    FROM detail_transaksi dt
    JOIN barang b ON b.id = dt.barang_id
    GROUP BY dt.transaksi_id
) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:11:28 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 14:11:39 --> Config Class Initialized
INFO - 2025-05-15 14:11:39 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:11:39 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:11:39 --> Utf8 Class Initialized
INFO - 2025-05-15 14:11:39 --> URI Class Initialized
INFO - 2025-05-15 14:11:39 --> Router Class Initialized
INFO - 2025-05-15 14:11:39 --> Output Class Initialized
INFO - 2025-05-15 14:11:39 --> Security Class Initialized
DEBUG - 2025-05-15 14:11:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:11:39 --> Input Class Initialized
INFO - 2025-05-15 14:11:39 --> Language Class Initialized
INFO - 2025-05-15 14:11:39 --> Loader Class Initialized
INFO - 2025-05-15 14:11:39 --> Helper loaded: url_helper
INFO - 2025-05-15 14:11:39 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:11:39 --> Helper loaded: form_helper
INFO - 2025-05-15 14:11:39 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:11:39 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:11:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:11:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:11:39 --> Form Validation Class Initialized
INFO - 2025-05-15 14:11:39 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:11:39 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:11:39 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:11:39 --> Controller Class Initialized
INFO - 2025-05-15 14:11:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:11:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:11:39 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:11:39 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:11:39 --> Final output sent to browser
DEBUG - 2025-05-15 14:11:39 --> Total execution time: 0.0192
INFO - 2025-05-15 14:14:18 --> Config Class Initialized
INFO - 2025-05-15 14:14:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:14:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:14:18 --> Utf8 Class Initialized
INFO - 2025-05-15 14:14:18 --> URI Class Initialized
INFO - 2025-05-15 14:14:18 --> Router Class Initialized
INFO - 2025-05-15 14:14:18 --> Output Class Initialized
INFO - 2025-05-15 14:14:18 --> Security Class Initialized
DEBUG - 2025-05-15 14:14:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:14:18 --> Input Class Initialized
INFO - 2025-05-15 14:14:18 --> Language Class Initialized
INFO - 2025-05-15 14:14:18 --> Loader Class Initialized
INFO - 2025-05-15 14:14:18 --> Helper loaded: url_helper
INFO - 2025-05-15 14:14:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:14:18 --> Helper loaded: form_helper
INFO - 2025-05-15 14:14:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:14:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:14:18 --> Form Validation Class Initialized
INFO - 2025-05-15 14:14:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:14:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:14:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:14:18 --> Controller Class Initialized
INFO - 2025-05-15 14:14:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:14:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:14:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:14:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:14:18 --> Final output sent to browser
DEBUG - 2025-05-15 14:14:18 --> Total execution time: 0.0154
INFO - 2025-05-15 14:14:19 --> Config Class Initialized
INFO - 2025-05-15 14:14:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:14:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:14:19 --> Utf8 Class Initialized
INFO - 2025-05-15 14:14:19 --> URI Class Initialized
INFO - 2025-05-15 14:14:19 --> Router Class Initialized
INFO - 2025-05-15 14:14:19 --> Output Class Initialized
INFO - 2025-05-15 14:14:19 --> Security Class Initialized
DEBUG - 2025-05-15 14:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:14:19 --> Input Class Initialized
INFO - 2025-05-15 14:14:19 --> Language Class Initialized
INFO - 2025-05-15 14:14:19 --> Loader Class Initialized
INFO - 2025-05-15 14:14:19 --> Helper loaded: url_helper
INFO - 2025-05-15 14:14:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:14:19 --> Helper loaded: form_helper
INFO - 2025-05-15 14:14:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:14:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:14:19 --> Form Validation Class Initialized
INFO - 2025-05-15 14:14:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:14:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:14:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:14:19 --> Controller Class Initialized
INFO - 2025-05-15 14:14:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:14:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:14:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:14:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:14:19 --> Final output sent to browser
DEBUG - 2025-05-15 14:14:19 --> Total execution time: 0.0093
INFO - 2025-05-15 14:14:20 --> Config Class Initialized
INFO - 2025-05-15 14:14:20 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:14:20 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:14:20 --> Utf8 Class Initialized
INFO - 2025-05-15 14:14:20 --> URI Class Initialized
INFO - 2025-05-15 14:14:20 --> Router Class Initialized
INFO - 2025-05-15 14:14:20 --> Output Class Initialized
INFO - 2025-05-15 14:14:20 --> Security Class Initialized
DEBUG - 2025-05-15 14:14:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:14:20 --> Input Class Initialized
INFO - 2025-05-15 14:14:20 --> Language Class Initialized
INFO - 2025-05-15 14:14:20 --> Loader Class Initialized
INFO - 2025-05-15 14:14:20 --> Helper loaded: url_helper
INFO - 2025-05-15 14:14:20 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:14:20 --> Helper loaded: form_helper
INFO - 2025-05-15 14:14:20 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:14:20 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:14:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:14:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:14:20 --> Form Validation Class Initialized
INFO - 2025-05-15 14:14:20 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:14:20 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:14:20 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:14:20 --> Controller Class Initialized
INFO - 2025-05-15 14:14:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:14:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:14:20 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:14:20 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:14:20 --> Final output sent to browser
DEBUG - 2025-05-15 14:14:20 --> Total execution time: 0.0177
INFO - 2025-05-15 14:14:31 --> Config Class Initialized
INFO - 2025-05-15 14:14:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:14:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:14:31 --> Utf8 Class Initialized
INFO - 2025-05-15 14:14:31 --> URI Class Initialized
INFO - 2025-05-15 14:14:31 --> Router Class Initialized
INFO - 2025-05-15 14:14:31 --> Output Class Initialized
INFO - 2025-05-15 14:14:31 --> Security Class Initialized
DEBUG - 2025-05-15 14:14:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:14:31 --> Input Class Initialized
INFO - 2025-05-15 14:14:31 --> Language Class Initialized
INFO - 2025-05-15 14:14:31 --> Loader Class Initialized
INFO - 2025-05-15 14:14:31 --> Helper loaded: url_helper
INFO - 2025-05-15 14:14:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:14:31 --> Helper loaded: form_helper
INFO - 2025-05-15 14:14:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:14:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:14:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:14:31 --> Form Validation Class Initialized
INFO - 2025-05-15 14:14:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:14:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:14:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:14:31 --> Controller Class Initialized
INFO - 2025-05-15 14:14:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:14:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:14:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:14:31 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:14:31 --> Final output sent to browser
DEBUG - 2025-05-15 14:14:31 --> Total execution time: 0.0258
INFO - 2025-05-15 14:14:33 --> Config Class Initialized
INFO - 2025-05-15 14:14:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:14:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:14:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:14:33 --> URI Class Initialized
INFO - 2025-05-15 14:14:33 --> Router Class Initialized
INFO - 2025-05-15 14:14:33 --> Output Class Initialized
INFO - 2025-05-15 14:14:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:14:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:14:33 --> Input Class Initialized
INFO - 2025-05-15 14:14:33 --> Language Class Initialized
INFO - 2025-05-15 14:14:33 --> Loader Class Initialized
INFO - 2025-05-15 14:14:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:14:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:14:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:14:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:14:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:14:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:14:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:14:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:14:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:14:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:14:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:14:33 --> Controller Class Initialized
DEBUG - 2025-05-15 14:14:33 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 14:14:33 --> Severity: error --> Exception: Cell coordinate string can not be a range of cells /var/www/html/codeigniter/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php 38
INFO - 2025-05-15 14:17:41 --> Config Class Initialized
INFO - 2025-05-15 14:17:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:17:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:17:41 --> Utf8 Class Initialized
INFO - 2025-05-15 14:17:41 --> URI Class Initialized
INFO - 2025-05-15 14:17:41 --> Router Class Initialized
INFO - 2025-05-15 14:17:41 --> Output Class Initialized
INFO - 2025-05-15 14:17:41 --> Security Class Initialized
DEBUG - 2025-05-15 14:17:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:17:41 --> Input Class Initialized
INFO - 2025-05-15 14:17:41 --> Language Class Initialized
INFO - 2025-05-15 14:17:41 --> Loader Class Initialized
INFO - 2025-05-15 14:17:41 --> Helper loaded: url_helper
INFO - 2025-05-15 14:17:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:17:41 --> Helper loaded: form_helper
INFO - 2025-05-15 14:17:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:17:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:17:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:17:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:17:41 --> Form Validation Class Initialized
INFO - 2025-05-15 14:17:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:17:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:17:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:17:41 --> Controller Class Initialized
INFO - 2025-05-15 14:17:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:17:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:17:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:17:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:17:41 --> Final output sent to browser
DEBUG - 2025-05-15 14:17:41 --> Total execution time: 0.0294
INFO - 2025-05-15 14:17:42 --> Config Class Initialized
INFO - 2025-05-15 14:17:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:17:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:17:42 --> Utf8 Class Initialized
INFO - 2025-05-15 14:17:42 --> URI Class Initialized
INFO - 2025-05-15 14:17:42 --> Router Class Initialized
INFO - 2025-05-15 14:17:42 --> Output Class Initialized
INFO - 2025-05-15 14:17:42 --> Security Class Initialized
DEBUG - 2025-05-15 14:17:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:17:42 --> Input Class Initialized
INFO - 2025-05-15 14:17:42 --> Language Class Initialized
INFO - 2025-05-15 14:17:42 --> Loader Class Initialized
INFO - 2025-05-15 14:17:42 --> Helper loaded: url_helper
INFO - 2025-05-15 14:17:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:17:42 --> Helper loaded: form_helper
INFO - 2025-05-15 14:17:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:17:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:17:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:17:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:17:42 --> Form Validation Class Initialized
INFO - 2025-05-15 14:17:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:17:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:17:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:17:42 --> Controller Class Initialized
INFO - 2025-05-15 14:17:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:17:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:17:42 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:17:42 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:17:42 --> Final output sent to browser
DEBUG - 2025-05-15 14:17:42 --> Total execution time: 0.0099
INFO - 2025-05-15 14:17:43 --> Config Class Initialized
INFO - 2025-05-15 14:17:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:17:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:17:43 --> Utf8 Class Initialized
INFO - 2025-05-15 14:17:43 --> URI Class Initialized
INFO - 2025-05-15 14:17:43 --> Router Class Initialized
INFO - 2025-05-15 14:17:43 --> Output Class Initialized
INFO - 2025-05-15 14:17:43 --> Security Class Initialized
DEBUG - 2025-05-15 14:17:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:17:43 --> Input Class Initialized
INFO - 2025-05-15 14:17:43 --> Language Class Initialized
INFO - 2025-05-15 14:17:43 --> Loader Class Initialized
INFO - 2025-05-15 14:17:43 --> Helper loaded: url_helper
INFO - 2025-05-15 14:17:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:17:43 --> Helper loaded: form_helper
INFO - 2025-05-15 14:17:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:17:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:17:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:17:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:17:43 --> Form Validation Class Initialized
INFO - 2025-05-15 14:17:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:17:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:17:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:17:43 --> Controller Class Initialized
DEBUG - 2025-05-15 14:17:43 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:12 --> Config Class Initialized
INFO - 2025-05-15 14:20:12 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:12 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:12 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:12 --> URI Class Initialized
INFO - 2025-05-15 14:20:12 --> Router Class Initialized
INFO - 2025-05-15 14:20:12 --> Output Class Initialized
INFO - 2025-05-15 14:20:12 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:12 --> Input Class Initialized
INFO - 2025-05-15 14:20:12 --> Language Class Initialized
INFO - 2025-05-15 14:20:12 --> Loader Class Initialized
INFO - 2025-05-15 14:20:12 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:12 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:12 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:12 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:12 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:12 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:12 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:12 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:12 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:12 --> Controller Class Initialized
INFO - 2025-05-15 14:20:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:20:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:20:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:20:12 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:20:12 --> Final output sent to browser
DEBUG - 2025-05-15 14:20:12 --> Total execution time: 0.0359
INFO - 2025-05-15 14:20:14 --> Config Class Initialized
INFO - 2025-05-15 14:20:14 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:14 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:14 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:14 --> URI Class Initialized
INFO - 2025-05-15 14:20:14 --> Router Class Initialized
INFO - 2025-05-15 14:20:14 --> Output Class Initialized
INFO - 2025-05-15 14:20:14 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:14 --> Input Class Initialized
INFO - 2025-05-15 14:20:14 --> Language Class Initialized
INFO - 2025-05-15 14:20:14 --> Loader Class Initialized
INFO - 2025-05-15 14:20:14 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:14 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:14 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:14 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:14 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:14 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:14 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:14 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:14 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:14 --> Controller Class Initialized
INFO - 2025-05-15 14:20:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:20:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:20:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:20:14 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:20:14 --> Final output sent to browser
DEBUG - 2025-05-15 14:20:14 --> Total execution time: 0.0135
INFO - 2025-05-15 14:20:15 --> Config Class Initialized
INFO - 2025-05-15 14:20:15 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:15 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:15 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:15 --> URI Class Initialized
INFO - 2025-05-15 14:20:15 --> Router Class Initialized
INFO - 2025-05-15 14:20:15 --> Output Class Initialized
INFO - 2025-05-15 14:20:15 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:15 --> Input Class Initialized
INFO - 2025-05-15 14:20:15 --> Language Class Initialized
INFO - 2025-05-15 14:20:15 --> Loader Class Initialized
INFO - 2025-05-15 14:20:15 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:15 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:15 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:15 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:15 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:15 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:15 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:15 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:15 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:15 --> Controller Class Initialized
INFO - 2025-05-15 14:20:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:20:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:20:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:20:15 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:20:15 --> Final output sent to browser
DEBUG - 2025-05-15 14:20:15 --> Total execution time: 0.0130
INFO - 2025-05-15 14:20:19 --> Config Class Initialized
INFO - 2025-05-15 14:20:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:19 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:19 --> URI Class Initialized
INFO - 2025-05-15 14:20:19 --> Router Class Initialized
INFO - 2025-05-15 14:20:19 --> Output Class Initialized
INFO - 2025-05-15 14:20:19 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:19 --> Input Class Initialized
INFO - 2025-05-15 14:20:19 --> Language Class Initialized
INFO - 2025-05-15 14:20:19 --> Loader Class Initialized
INFO - 2025-05-15 14:20:19 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:19 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:19 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:19 --> Controller Class Initialized
INFO - 2025-05-15 14:20:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:20:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:20:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:20:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:20:19 --> Final output sent to browser
DEBUG - 2025-05-15 14:20:19 --> Total execution time: 0.0412
INFO - 2025-05-15 14:20:22 --> Config Class Initialized
INFO - 2025-05-15 14:20:22 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:22 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:22 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:22 --> URI Class Initialized
INFO - 2025-05-15 14:20:22 --> Router Class Initialized
INFO - 2025-05-15 14:20:22 --> Output Class Initialized
INFO - 2025-05-15 14:20:22 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:22 --> Input Class Initialized
INFO - 2025-05-15 14:20:22 --> Language Class Initialized
INFO - 2025-05-15 14:20:22 --> Loader Class Initialized
INFO - 2025-05-15 14:20:22 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:22 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:22 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:22 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:22 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:22 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:22 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:22 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:22 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:22 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:22 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:23 --> Config Class Initialized
INFO - 2025-05-15 14:20:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:23 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:23 --> URI Class Initialized
INFO - 2025-05-15 14:20:23 --> Router Class Initialized
INFO - 2025-05-15 14:20:23 --> Output Class Initialized
INFO - 2025-05-15 14:20:23 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:23 --> Input Class Initialized
INFO - 2025-05-15 14:20:23 --> Language Class Initialized
INFO - 2025-05-15 14:20:23 --> Loader Class Initialized
INFO - 2025-05-15 14:20:23 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:23 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:23 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:23 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:23 --> Config Class Initialized
INFO - 2025-05-15 14:20:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:23 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:23 --> URI Class Initialized
INFO - 2025-05-15 14:20:23 --> Router Class Initialized
INFO - 2025-05-15 14:20:23 --> Output Class Initialized
INFO - 2025-05-15 14:20:23 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:23 --> Input Class Initialized
INFO - 2025-05-15 14:20:23 --> Language Class Initialized
INFO - 2025-05-15 14:20:23 --> Loader Class Initialized
INFO - 2025-05-15 14:20:23 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:23 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:23 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:23 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:23 --> Config Class Initialized
INFO - 2025-05-15 14:20:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:23 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:23 --> URI Class Initialized
INFO - 2025-05-15 14:20:23 --> Router Class Initialized
INFO - 2025-05-15 14:20:23 --> Output Class Initialized
INFO - 2025-05-15 14:20:23 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:23 --> Input Class Initialized
INFO - 2025-05-15 14:20:23 --> Language Class Initialized
INFO - 2025-05-15 14:20:23 --> Loader Class Initialized
INFO - 2025-05-15 14:20:23 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:23 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:23 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:23 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:23 --> Config Class Initialized
INFO - 2025-05-15 14:20:23 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:23 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:23 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:23 --> URI Class Initialized
INFO - 2025-05-15 14:20:23 --> Router Class Initialized
INFO - 2025-05-15 14:20:23 --> Output Class Initialized
INFO - 2025-05-15 14:20:23 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:23 --> Input Class Initialized
INFO - 2025-05-15 14:20:23 --> Language Class Initialized
INFO - 2025-05-15 14:20:23 --> Loader Class Initialized
INFO - 2025-05-15 14:20:23 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:23 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:23 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:23 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:23 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:23 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:23 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:24 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:24 --> Config Class Initialized
INFO - 2025-05-15 14:20:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:24 --> URI Class Initialized
INFO - 2025-05-15 14:20:24 --> Router Class Initialized
INFO - 2025-05-15 14:20:24 --> Output Class Initialized
INFO - 2025-05-15 14:20:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:24 --> Input Class Initialized
INFO - 2025-05-15 14:20:24 --> Language Class Initialized
INFO - 2025-05-15 14:20:24 --> Loader Class Initialized
INFO - 2025-05-15 14:20:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:24 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:24 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:24 --> Config Class Initialized
INFO - 2025-05-15 14:20:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:24 --> URI Class Initialized
INFO - 2025-05-15 14:20:24 --> Router Class Initialized
INFO - 2025-05-15 14:20:24 --> Output Class Initialized
INFO - 2025-05-15 14:20:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:24 --> Input Class Initialized
INFO - 2025-05-15 14:20:24 --> Language Class Initialized
INFO - 2025-05-15 14:20:24 --> Loader Class Initialized
INFO - 2025-05-15 14:20:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:24 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:24 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:24 --> Config Class Initialized
INFO - 2025-05-15 14:20:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:24 --> URI Class Initialized
INFO - 2025-05-15 14:20:24 --> Router Class Initialized
INFO - 2025-05-15 14:20:24 --> Output Class Initialized
INFO - 2025-05-15 14:20:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:24 --> Input Class Initialized
INFO - 2025-05-15 14:20:24 --> Language Class Initialized
INFO - 2025-05-15 14:20:24 --> Loader Class Initialized
INFO - 2025-05-15 14:20:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:24 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:24 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:24 --> Config Class Initialized
INFO - 2025-05-15 14:20:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:24 --> URI Class Initialized
INFO - 2025-05-15 14:20:24 --> Router Class Initialized
INFO - 2025-05-15 14:20:24 --> Output Class Initialized
INFO - 2025-05-15 14:20:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:24 --> Input Class Initialized
INFO - 2025-05-15 14:20:24 --> Language Class Initialized
INFO - 2025-05-15 14:20:24 --> Loader Class Initialized
INFO - 2025-05-15 14:20:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:24 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:24 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:34 --> Config Class Initialized
INFO - 2025-05-15 14:20:34 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:34 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:34 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:34 --> URI Class Initialized
INFO - 2025-05-15 14:20:34 --> Router Class Initialized
INFO - 2025-05-15 14:20:34 --> Output Class Initialized
INFO - 2025-05-15 14:20:34 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:35 --> Input Class Initialized
INFO - 2025-05-15 14:20:35 --> Language Class Initialized
INFO - 2025-05-15 14:20:35 --> Loader Class Initialized
INFO - 2025-05-15 14:20:35 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:35 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:35 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:35 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:35 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:35 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:35 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:35 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:35 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:35 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:35 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:20:38 --> Config Class Initialized
INFO - 2025-05-15 14:20:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:38 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:38 --> URI Class Initialized
INFO - 2025-05-15 14:20:38 --> Router Class Initialized
INFO - 2025-05-15 14:20:38 --> Output Class Initialized
INFO - 2025-05-15 14:20:38 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:38 --> Input Class Initialized
INFO - 2025-05-15 14:20:38 --> Language Class Initialized
INFO - 2025-05-15 14:20:38 --> Loader Class Initialized
INFO - 2025-05-15 14:20:38 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:38 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:38 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:38 --> Controller Class Initialized
INFO - 2025-05-15 14:20:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:20:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:20:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:20:38 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:20:38 --> Final output sent to browser
DEBUG - 2025-05-15 14:20:38 --> Total execution time: 0.0179
INFO - 2025-05-15 14:20:39 --> Config Class Initialized
INFO - 2025-05-15 14:20:39 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:20:39 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:20:39 --> Utf8 Class Initialized
INFO - 2025-05-15 14:20:39 --> URI Class Initialized
INFO - 2025-05-15 14:20:39 --> Router Class Initialized
INFO - 2025-05-15 14:20:39 --> Output Class Initialized
INFO - 2025-05-15 14:20:39 --> Security Class Initialized
DEBUG - 2025-05-15 14:20:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:20:39 --> Input Class Initialized
INFO - 2025-05-15 14:20:39 --> Language Class Initialized
INFO - 2025-05-15 14:20:39 --> Loader Class Initialized
INFO - 2025-05-15 14:20:39 --> Helper loaded: url_helper
INFO - 2025-05-15 14:20:39 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:20:39 --> Helper loaded: form_helper
INFO - 2025-05-15 14:20:39 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:20:39 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:20:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:20:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:20:39 --> Form Validation Class Initialized
INFO - 2025-05-15 14:20:39 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:20:39 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:20:39 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:20:39 --> Controller Class Initialized
DEBUG - 2025-05-15 14:20:39 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:21:12 --> Config Class Initialized
INFO - 2025-05-15 14:21:12 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:12 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:12 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:12 --> URI Class Initialized
INFO - 2025-05-15 14:21:12 --> Router Class Initialized
INFO - 2025-05-15 14:21:12 --> Output Class Initialized
INFO - 2025-05-15 14:21:12 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:12 --> Input Class Initialized
INFO - 2025-05-15 14:21:12 --> Language Class Initialized
INFO - 2025-05-15 14:21:12 --> Loader Class Initialized
INFO - 2025-05-15 14:21:12 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:12 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:12 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:12 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:12 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:12 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:12 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:12 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:12 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:12 --> Controller Class Initialized
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:12 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:12 --> Total execution time: 0.0200
INFO - 2025-05-15 14:21:12 --> Config Class Initialized
INFO - 2025-05-15 14:21:12 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:12 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:12 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:12 --> URI Class Initialized
INFO - 2025-05-15 14:21:12 --> Router Class Initialized
INFO - 2025-05-15 14:21:12 --> Output Class Initialized
INFO - 2025-05-15 14:21:12 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:12 --> Input Class Initialized
INFO - 2025-05-15 14:21:12 --> Language Class Initialized
INFO - 2025-05-15 14:21:12 --> Loader Class Initialized
INFO - 2025-05-15 14:21:12 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:12 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:12 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:12 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:12 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:12 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:12 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:12 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:12 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:12 --> Controller Class Initialized
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:12 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:12 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:12 --> Total execution time: 0.0185
INFO - 2025-05-15 14:21:13 --> Config Class Initialized
INFO - 2025-05-15 14:21:13 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:13 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:13 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:13 --> URI Class Initialized
INFO - 2025-05-15 14:21:13 --> Router Class Initialized
INFO - 2025-05-15 14:21:13 --> Output Class Initialized
INFO - 2025-05-15 14:21:13 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:13 --> Input Class Initialized
INFO - 2025-05-15 14:21:13 --> Language Class Initialized
INFO - 2025-05-15 14:21:13 --> Loader Class Initialized
INFO - 2025-05-15 14:21:13 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:13 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:13 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:13 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:13 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:13 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:13 --> Controller Class Initialized
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:13 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:13 --> Total execution time: 0.0093
INFO - 2025-05-15 14:21:13 --> Config Class Initialized
INFO - 2025-05-15 14:21:13 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:13 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:13 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:13 --> URI Class Initialized
INFO - 2025-05-15 14:21:13 --> Router Class Initialized
INFO - 2025-05-15 14:21:13 --> Output Class Initialized
INFO - 2025-05-15 14:21:13 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:13 --> Input Class Initialized
INFO - 2025-05-15 14:21:13 --> Language Class Initialized
INFO - 2025-05-15 14:21:13 --> Loader Class Initialized
INFO - 2025-05-15 14:21:13 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:13 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:13 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:13 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:13 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:13 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:13 --> Controller Class Initialized
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:13 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:13 --> Total execution time: 0.0403
INFO - 2025-05-15 14:21:13 --> Config Class Initialized
INFO - 2025-05-15 14:21:13 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:13 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:13 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:13 --> URI Class Initialized
INFO - 2025-05-15 14:21:13 --> Router Class Initialized
INFO - 2025-05-15 14:21:13 --> Output Class Initialized
INFO - 2025-05-15 14:21:13 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:13 --> Input Class Initialized
INFO - 2025-05-15 14:21:13 --> Language Class Initialized
INFO - 2025-05-15 14:21:13 --> Loader Class Initialized
INFO - 2025-05-15 14:21:13 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:13 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:13 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:13 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:13 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:13 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:13 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:13 --> Controller Class Initialized
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:13 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:13 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:13 --> Total execution time: 0.0093
INFO - 2025-05-15 14:21:14 --> Config Class Initialized
INFO - 2025-05-15 14:21:14 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:14 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:14 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:14 --> URI Class Initialized
INFO - 2025-05-15 14:21:14 --> Router Class Initialized
INFO - 2025-05-15 14:21:14 --> Output Class Initialized
INFO - 2025-05-15 14:21:14 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:14 --> Input Class Initialized
INFO - 2025-05-15 14:21:14 --> Language Class Initialized
INFO - 2025-05-15 14:21:14 --> Loader Class Initialized
INFO - 2025-05-15 14:21:14 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:14 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:14 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:14 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:14 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:14 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:14 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:14 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:14 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:14 --> Controller Class Initialized
INFO - 2025-05-15 14:21:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:14 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:14 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:14 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:14 --> Total execution time: 0.0406
INFO - 2025-05-15 14:21:15 --> Config Class Initialized
INFO - 2025-05-15 14:21:15 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:15 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:15 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:15 --> URI Class Initialized
INFO - 2025-05-15 14:21:15 --> Router Class Initialized
INFO - 2025-05-15 14:21:15 --> Output Class Initialized
INFO - 2025-05-15 14:21:15 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:15 --> Input Class Initialized
INFO - 2025-05-15 14:21:15 --> Language Class Initialized
INFO - 2025-05-15 14:21:15 --> Loader Class Initialized
INFO - 2025-05-15 14:21:15 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:15 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:15 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:15 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:15 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:15 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:15 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:15 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:15 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:15 --> Controller Class Initialized
INFO - 2025-05-15 14:21:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:15 --> File loaded: /var/www/html/codeigniter/application/views/barang/index.php
INFO - 2025-05-15 14:21:15 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:15 --> Total execution time: 0.0121
INFO - 2025-05-15 14:21:16 --> Config Class Initialized
INFO - 2025-05-15 14:21:16 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:16 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:16 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:16 --> URI Class Initialized
INFO - 2025-05-15 14:21:16 --> Router Class Initialized
INFO - 2025-05-15 14:21:16 --> Output Class Initialized
INFO - 2025-05-15 14:21:16 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:16 --> Input Class Initialized
INFO - 2025-05-15 14:21:16 --> Language Class Initialized
INFO - 2025-05-15 14:21:16 --> Loader Class Initialized
INFO - 2025-05-15 14:21:16 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:16 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:16 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:16 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:16 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:16 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:16 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:16 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:16 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:16 --> Controller Class Initialized
INFO - 2025-05-15 14:21:16 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:16 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:16 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:16 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:16 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:16 --> Total execution time: 0.0413
INFO - 2025-05-15 14:21:51 --> Config Class Initialized
INFO - 2025-05-15 14:21:51 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:21:51 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:21:51 --> Utf8 Class Initialized
INFO - 2025-05-15 14:21:51 --> URI Class Initialized
INFO - 2025-05-15 14:21:51 --> Router Class Initialized
INFO - 2025-05-15 14:21:51 --> Output Class Initialized
INFO - 2025-05-15 14:21:51 --> Security Class Initialized
DEBUG - 2025-05-15 14:21:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:21:51 --> Input Class Initialized
INFO - 2025-05-15 14:21:51 --> Language Class Initialized
INFO - 2025-05-15 14:21:51 --> Loader Class Initialized
INFO - 2025-05-15 14:21:51 --> Helper loaded: url_helper
INFO - 2025-05-15 14:21:51 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:21:51 --> Helper loaded: form_helper
INFO - 2025-05-15 14:21:51 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:21:51 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:21:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:21:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:21:51 --> Form Validation Class Initialized
INFO - 2025-05-15 14:21:51 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:21:51 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:21:51 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:21:51 --> Controller Class Initialized
INFO - 2025-05-15 14:21:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:21:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:21:51 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:21:51 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:21:51 --> Final output sent to browser
DEBUG - 2025-05-15 14:21:51 --> Total execution time: 0.0301
INFO - 2025-05-15 14:22:01 --> Config Class Initialized
INFO - 2025-05-15 14:22:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:22:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:22:01 --> Utf8 Class Initialized
INFO - 2025-05-15 14:22:01 --> URI Class Initialized
INFO - 2025-05-15 14:22:01 --> Router Class Initialized
INFO - 2025-05-15 14:22:01 --> Output Class Initialized
INFO - 2025-05-15 14:22:01 --> Security Class Initialized
DEBUG - 2025-05-15 14:22:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:22:01 --> Input Class Initialized
INFO - 2025-05-15 14:22:01 --> Language Class Initialized
INFO - 2025-05-15 14:22:01 --> Loader Class Initialized
INFO - 2025-05-15 14:22:01 --> Helper loaded: url_helper
INFO - 2025-05-15 14:22:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:22:01 --> Helper loaded: form_helper
INFO - 2025-05-15 14:22:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:22:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:22:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:22:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:22:01 --> Form Validation Class Initialized
INFO - 2025-05-15 14:22:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:22:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:22:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:22:01 --> Controller Class Initialized
INFO - 2025-05-15 14:22:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:22:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:22:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:22:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:22:01 --> Final output sent to browser
DEBUG - 2025-05-15 14:22:01 --> Total execution time: 0.0401
INFO - 2025-05-15 14:22:04 --> Config Class Initialized
INFO - 2025-05-15 14:22:04 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:22:04 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:22:04 --> Utf8 Class Initialized
INFO - 2025-05-15 14:22:04 --> URI Class Initialized
INFO - 2025-05-15 14:22:04 --> Router Class Initialized
INFO - 2025-05-15 14:22:04 --> Output Class Initialized
INFO - 2025-05-15 14:22:04 --> Security Class Initialized
DEBUG - 2025-05-15 14:22:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:22:04 --> Input Class Initialized
INFO - 2025-05-15 14:22:04 --> Language Class Initialized
INFO - 2025-05-15 14:22:04 --> Loader Class Initialized
INFO - 2025-05-15 14:22:04 --> Helper loaded: url_helper
INFO - 2025-05-15 14:22:04 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:22:04 --> Helper loaded: form_helper
INFO - 2025-05-15 14:22:04 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:22:04 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:22:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:22:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:22:04 --> Form Validation Class Initialized
INFO - 2025-05-15 14:22:04 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:22:04 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:22:04 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:22:04 --> Controller Class Initialized
INFO - 2025-05-15 14:22:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:22:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:22:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:22:04 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:22:04 --> Final output sent to browser
DEBUG - 2025-05-15 14:22:04 --> Total execution time: 0.0419
INFO - 2025-05-15 14:22:06 --> Config Class Initialized
INFO - 2025-05-15 14:22:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:22:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:22:06 --> Utf8 Class Initialized
INFO - 2025-05-15 14:22:06 --> URI Class Initialized
INFO - 2025-05-15 14:22:06 --> Router Class Initialized
INFO - 2025-05-15 14:22:06 --> Output Class Initialized
INFO - 2025-05-15 14:22:06 --> Security Class Initialized
DEBUG - 2025-05-15 14:22:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:22:06 --> Input Class Initialized
INFO - 2025-05-15 14:22:06 --> Language Class Initialized
INFO - 2025-05-15 14:22:06 --> Loader Class Initialized
INFO - 2025-05-15 14:22:06 --> Helper loaded: url_helper
INFO - 2025-05-15 14:22:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:22:06 --> Helper loaded: form_helper
INFO - 2025-05-15 14:22:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:22:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:22:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:22:06 --> Form Validation Class Initialized
INFO - 2025-05-15 14:22:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:22:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:22:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:22:06 --> Controller Class Initialized
INFO - 2025-05-15 14:22:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:22:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:22:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:22:06 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:22:06 --> Final output sent to browser
DEBUG - 2025-05-15 14:22:06 --> Total execution time: 0.0099
INFO - 2025-05-15 14:22:08 --> Config Class Initialized
INFO - 2025-05-15 14:22:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:22:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:22:08 --> Utf8 Class Initialized
INFO - 2025-05-15 14:22:08 --> URI Class Initialized
INFO - 2025-05-15 14:22:08 --> Router Class Initialized
INFO - 2025-05-15 14:22:08 --> Output Class Initialized
INFO - 2025-05-15 14:22:08 --> Security Class Initialized
DEBUG - 2025-05-15 14:22:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:22:08 --> Input Class Initialized
INFO - 2025-05-15 14:22:08 --> Language Class Initialized
INFO - 2025-05-15 14:22:08 --> Loader Class Initialized
INFO - 2025-05-15 14:22:08 --> Helper loaded: url_helper
INFO - 2025-05-15 14:22:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:22:08 --> Helper loaded: form_helper
INFO - 2025-05-15 14:22:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:22:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:22:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:22:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:22:08 --> Form Validation Class Initialized
INFO - 2025-05-15 14:22:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:22:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:22:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:22:08 --> Controller Class Initialized
DEBUG - 2025-05-15 14:22:08 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:22:17 --> Config Class Initialized
INFO - 2025-05-15 14:22:17 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:22:17 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:22:17 --> Utf8 Class Initialized
INFO - 2025-05-15 14:22:17 --> URI Class Initialized
INFO - 2025-05-15 14:22:17 --> Router Class Initialized
INFO - 2025-05-15 14:22:17 --> Output Class Initialized
INFO - 2025-05-15 14:22:17 --> Security Class Initialized
DEBUG - 2025-05-15 14:22:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:22:17 --> Input Class Initialized
INFO - 2025-05-15 14:22:17 --> Language Class Initialized
INFO - 2025-05-15 14:22:17 --> Loader Class Initialized
INFO - 2025-05-15 14:22:17 --> Helper loaded: url_helper
INFO - 2025-05-15 14:22:17 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:22:17 --> Helper loaded: form_helper
INFO - 2025-05-15 14:22:17 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:22:17 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:22:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:22:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:22:17 --> Form Validation Class Initialized
INFO - 2025-05-15 14:22:17 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:22:17 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:22:17 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:22:17 --> Controller Class Initialized
INFO - 2025-05-15 14:22:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:22:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:22:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:22:17 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:22:17 --> Final output sent to browser
DEBUG - 2025-05-15 14:22:17 --> Total execution time: 0.0181
INFO - 2025-05-15 14:23:24 --> Config Class Initialized
INFO - 2025-05-15 14:23:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:23:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:23:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:23:24 --> URI Class Initialized
INFO - 2025-05-15 14:23:24 --> Router Class Initialized
INFO - 2025-05-15 14:23:24 --> Output Class Initialized
INFO - 2025-05-15 14:23:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:23:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:23:24 --> Input Class Initialized
INFO - 2025-05-15 14:23:24 --> Language Class Initialized
INFO - 2025-05-15 14:23:24 --> Loader Class Initialized
INFO - 2025-05-15 14:23:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:23:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:23:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:23:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:23:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:23:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:23:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:23:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:23:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:23:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:23:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:23:24 --> Controller Class Initialized
INFO - 2025-05-15 14:23:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:23:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:23:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:23:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:23:24 --> Final output sent to browser
DEBUG - 2025-05-15 14:23:24 --> Total execution time: 0.0176
INFO - 2025-05-15 14:23:32 --> Config Class Initialized
INFO - 2025-05-15 14:23:32 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:23:32 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:23:32 --> Utf8 Class Initialized
INFO - 2025-05-15 14:23:32 --> URI Class Initialized
INFO - 2025-05-15 14:23:32 --> Router Class Initialized
INFO - 2025-05-15 14:23:32 --> Output Class Initialized
INFO - 2025-05-15 14:23:32 --> Security Class Initialized
DEBUG - 2025-05-15 14:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:23:32 --> Input Class Initialized
INFO - 2025-05-15 14:23:32 --> Language Class Initialized
INFO - 2025-05-15 14:23:32 --> Loader Class Initialized
INFO - 2025-05-15 14:23:32 --> Helper loaded: url_helper
INFO - 2025-05-15 14:23:32 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:23:32 --> Helper loaded: form_helper
INFO - 2025-05-15 14:23:32 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:23:32 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:23:32 --> Form Validation Class Initialized
INFO - 2025-05-15 14:23:32 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:23:32 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:23:32 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:23:32 --> Controller Class Initialized
INFO - 2025-05-15 14:23:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:23:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:23:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:23:32 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:23:32 --> Final output sent to browser
DEBUG - 2025-05-15 14:23:32 --> Total execution time: 0.0251
INFO - 2025-05-15 14:23:34 --> Config Class Initialized
INFO - 2025-05-15 14:23:34 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:23:34 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:23:34 --> Utf8 Class Initialized
INFO - 2025-05-15 14:23:34 --> URI Class Initialized
INFO - 2025-05-15 14:23:34 --> Router Class Initialized
INFO - 2025-05-15 14:23:34 --> Output Class Initialized
INFO - 2025-05-15 14:23:34 --> Security Class Initialized
DEBUG - 2025-05-15 14:23:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:23:34 --> Input Class Initialized
INFO - 2025-05-15 14:23:34 --> Language Class Initialized
INFO - 2025-05-15 14:23:34 --> Loader Class Initialized
INFO - 2025-05-15 14:23:34 --> Helper loaded: url_helper
INFO - 2025-05-15 14:23:34 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:23:34 --> Helper loaded: form_helper
INFO - 2025-05-15 14:23:34 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:23:34 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:23:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:23:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:23:34 --> Form Validation Class Initialized
INFO - 2025-05-15 14:23:34 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:23:34 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:23:34 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:23:34 --> Controller Class Initialized
DEBUG - 2025-05-15 14:23:34 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:23:55 --> Config Class Initialized
INFO - 2025-05-15 14:23:55 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:23:55 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:23:55 --> Utf8 Class Initialized
INFO - 2025-05-15 14:23:55 --> URI Class Initialized
INFO - 2025-05-15 14:23:55 --> Router Class Initialized
INFO - 2025-05-15 14:23:55 --> Output Class Initialized
INFO - 2025-05-15 14:23:55 --> Security Class Initialized
DEBUG - 2025-05-15 14:23:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:23:55 --> Input Class Initialized
INFO - 2025-05-15 14:23:55 --> Language Class Initialized
INFO - 2025-05-15 14:23:55 --> Loader Class Initialized
INFO - 2025-05-15 14:23:55 --> Helper loaded: url_helper
INFO - 2025-05-15 14:23:55 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:23:55 --> Helper loaded: form_helper
INFO - 2025-05-15 14:23:55 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:23:55 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:23:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:23:55 --> Form Validation Class Initialized
INFO - 2025-05-15 14:23:55 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:23:55 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:23:55 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:23:55 --> Controller Class Initialized
INFO - 2025-05-15 14:23:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:23:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:23:55 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:23:55 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:23:55 --> Final output sent to browser
DEBUG - 2025-05-15 14:23:55 --> Total execution time: 0.0221
INFO - 2025-05-15 14:24:03 --> Config Class Initialized
INFO - 2025-05-15 14:24:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:24:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:24:03 --> Utf8 Class Initialized
INFO - 2025-05-15 14:24:03 --> URI Class Initialized
INFO - 2025-05-15 14:24:03 --> Router Class Initialized
INFO - 2025-05-15 14:24:03 --> Output Class Initialized
INFO - 2025-05-15 14:24:03 --> Security Class Initialized
DEBUG - 2025-05-15 14:24:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:24:03 --> Input Class Initialized
INFO - 2025-05-15 14:24:03 --> Language Class Initialized
INFO - 2025-05-15 14:24:03 --> Loader Class Initialized
INFO - 2025-05-15 14:24:03 --> Helper loaded: url_helper
INFO - 2025-05-15 14:24:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:24:03 --> Helper loaded: form_helper
INFO - 2025-05-15 14:24:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:24:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:24:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:24:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:24:03 --> Form Validation Class Initialized
INFO - 2025-05-15 14:24:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:24:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:24:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:24:03 --> Controller Class Initialized
INFO - 2025-05-15 14:24:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:24:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:24:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:24:03 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:24:03 --> Final output sent to browser
DEBUG - 2025-05-15 14:24:03 --> Total execution time: 0.0105
INFO - 2025-05-15 14:24:08 --> Config Class Initialized
INFO - 2025-05-15 14:24:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:24:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:24:08 --> Utf8 Class Initialized
INFO - 2025-05-15 14:24:08 --> URI Class Initialized
INFO - 2025-05-15 14:24:08 --> Router Class Initialized
INFO - 2025-05-15 14:24:08 --> Output Class Initialized
INFO - 2025-05-15 14:24:08 --> Security Class Initialized
DEBUG - 2025-05-15 14:24:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:24:08 --> Input Class Initialized
INFO - 2025-05-15 14:24:08 --> Language Class Initialized
INFO - 2025-05-15 14:24:08 --> Loader Class Initialized
INFO - 2025-05-15 14:24:08 --> Helper loaded: url_helper
INFO - 2025-05-15 14:24:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:24:08 --> Helper loaded: form_helper
INFO - 2025-05-15 14:24:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:24:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:24:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:24:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:24:08 --> Form Validation Class Initialized
INFO - 2025-05-15 14:24:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:24:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:24:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:24:08 --> Controller Class Initialized
INFO - 2025-05-15 14:24:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:24:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:24:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:24:08 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:24:08 --> Final output sent to browser
DEBUG - 2025-05-15 14:24:08 --> Total execution time: 0.0253
INFO - 2025-05-15 14:30:46 --> Config Class Initialized
INFO - 2025-05-15 14:30:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:30:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:30:46 --> Utf8 Class Initialized
INFO - 2025-05-15 14:30:46 --> URI Class Initialized
INFO - 2025-05-15 14:30:46 --> Router Class Initialized
INFO - 2025-05-15 14:30:46 --> Output Class Initialized
INFO - 2025-05-15 14:30:46 --> Security Class Initialized
DEBUG - 2025-05-15 14:30:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:30:46 --> Input Class Initialized
INFO - 2025-05-15 14:30:46 --> Language Class Initialized
INFO - 2025-05-15 14:30:46 --> Loader Class Initialized
INFO - 2025-05-15 14:30:46 --> Helper loaded: url_helper
INFO - 2025-05-15 14:30:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:30:46 --> Helper loaded: form_helper
INFO - 2025-05-15 14:30:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:30:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:30:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:30:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:30:46 --> Form Validation Class Initialized
INFO - 2025-05-15 14:30:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:30:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:30:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:30:46 --> Controller Class Initialized
INFO - 2025-05-15 14:30:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:30:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:30:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:30:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:30:46 --> Final output sent to browser
DEBUG - 2025-05-15 14:30:46 --> Total execution time: 0.0352
INFO - 2025-05-15 14:30:47 --> Config Class Initialized
INFO - 2025-05-15 14:30:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:30:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:30:47 --> Utf8 Class Initialized
INFO - 2025-05-15 14:30:47 --> URI Class Initialized
INFO - 2025-05-15 14:30:47 --> Router Class Initialized
INFO - 2025-05-15 14:30:47 --> Output Class Initialized
INFO - 2025-05-15 14:30:47 --> Security Class Initialized
DEBUG - 2025-05-15 14:30:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:30:47 --> Input Class Initialized
INFO - 2025-05-15 14:30:47 --> Language Class Initialized
INFO - 2025-05-15 14:30:47 --> Loader Class Initialized
INFO - 2025-05-15 14:30:47 --> Helper loaded: url_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: form_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:30:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:30:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:30:47 --> Form Validation Class Initialized
INFO - 2025-05-15 14:30:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:30:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:30:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:30:47 --> Controller Class Initialized
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:30:47 --> Final output sent to browser
DEBUG - 2025-05-15 14:30:47 --> Total execution time: 0.0287
INFO - 2025-05-15 14:30:47 --> Config Class Initialized
INFO - 2025-05-15 14:30:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:30:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:30:47 --> Utf8 Class Initialized
INFO - 2025-05-15 14:30:47 --> URI Class Initialized
INFO - 2025-05-15 14:30:47 --> Router Class Initialized
INFO - 2025-05-15 14:30:47 --> Output Class Initialized
INFO - 2025-05-15 14:30:47 --> Security Class Initialized
DEBUG - 2025-05-15 14:30:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:30:47 --> Input Class Initialized
INFO - 2025-05-15 14:30:47 --> Language Class Initialized
INFO - 2025-05-15 14:30:47 --> Loader Class Initialized
INFO - 2025-05-15 14:30:47 --> Helper loaded: url_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: form_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:30:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:30:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:30:47 --> Form Validation Class Initialized
INFO - 2025-05-15 14:30:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:30:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:30:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:30:47 --> Controller Class Initialized
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:30:47 --> Final output sent to browser
DEBUG - 2025-05-15 14:30:47 --> Total execution time: 0.0412
INFO - 2025-05-15 14:30:47 --> Config Class Initialized
INFO - 2025-05-15 14:30:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:30:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:30:47 --> Utf8 Class Initialized
INFO - 2025-05-15 14:30:47 --> URI Class Initialized
INFO - 2025-05-15 14:30:47 --> Router Class Initialized
INFO - 2025-05-15 14:30:47 --> Output Class Initialized
INFO - 2025-05-15 14:30:47 --> Security Class Initialized
DEBUG - 2025-05-15 14:30:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:30:47 --> Input Class Initialized
INFO - 2025-05-15 14:30:47 --> Language Class Initialized
INFO - 2025-05-15 14:30:47 --> Loader Class Initialized
INFO - 2025-05-15 14:30:47 --> Helper loaded: url_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: form_helper
INFO - 2025-05-15 14:30:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:30:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:30:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:30:47 --> Form Validation Class Initialized
INFO - 2025-05-15 14:30:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:30:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:30:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:30:47 --> Controller Class Initialized
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:30:47 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:30:47 --> Final output sent to browser
DEBUG - 2025-05-15 14:30:47 --> Total execution time: 0.0215
INFO - 2025-05-15 14:30:54 --> Config Class Initialized
INFO - 2025-05-15 14:30:54 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:30:54 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:30:54 --> Utf8 Class Initialized
INFO - 2025-05-15 14:30:54 --> URI Class Initialized
INFO - 2025-05-15 14:30:54 --> Router Class Initialized
INFO - 2025-05-15 14:30:54 --> Output Class Initialized
INFO - 2025-05-15 14:30:54 --> Security Class Initialized
DEBUG - 2025-05-15 14:30:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:30:54 --> Input Class Initialized
INFO - 2025-05-15 14:30:54 --> Language Class Initialized
INFO - 2025-05-15 14:30:54 --> Loader Class Initialized
INFO - 2025-05-15 14:30:54 --> Helper loaded: url_helper
INFO - 2025-05-15 14:30:54 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:30:54 --> Helper loaded: form_helper
INFO - 2025-05-15 14:30:54 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:30:54 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:30:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:30:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:30:54 --> Form Validation Class Initialized
INFO - 2025-05-15 14:30:54 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:30:54 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:30:54 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:30:54 --> Controller Class Initialized
INFO - 2025-05-15 14:30:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:30:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:30:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:30:54 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:30:54 --> Final output sent to browser
DEBUG - 2025-05-15 14:30:54 --> Total execution time: 0.0099
INFO - 2025-05-15 14:31:01 --> Config Class Initialized
INFO - 2025-05-15 14:31:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:31:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:31:01 --> Utf8 Class Initialized
INFO - 2025-05-15 14:31:01 --> URI Class Initialized
INFO - 2025-05-15 14:31:01 --> Router Class Initialized
INFO - 2025-05-15 14:31:01 --> Output Class Initialized
INFO - 2025-05-15 14:31:01 --> Security Class Initialized
DEBUG - 2025-05-15 14:31:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:31:01 --> Input Class Initialized
INFO - 2025-05-15 14:31:01 --> Language Class Initialized
INFO - 2025-05-15 14:31:01 --> Loader Class Initialized
INFO - 2025-05-15 14:31:01 --> Helper loaded: url_helper
INFO - 2025-05-15 14:31:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:31:01 --> Helper loaded: form_helper
INFO - 2025-05-15 14:31:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:31:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:31:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:31:01 --> Form Validation Class Initialized
INFO - 2025-05-15 14:31:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:31:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:31:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:31:01 --> Controller Class Initialized
INFO - 2025-05-15 14:31:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:31:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:31:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:31:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:31:01 --> Final output sent to browser
DEBUG - 2025-05-15 14:31:01 --> Total execution time: 0.0413
INFO - 2025-05-15 14:31:04 --> Config Class Initialized
INFO - 2025-05-15 14:31:04 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:31:04 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:31:04 --> Utf8 Class Initialized
INFO - 2025-05-15 14:31:04 --> URI Class Initialized
INFO - 2025-05-15 14:31:04 --> Router Class Initialized
INFO - 2025-05-15 14:31:04 --> Output Class Initialized
INFO - 2025-05-15 14:31:04 --> Security Class Initialized
DEBUG - 2025-05-15 14:31:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:31:04 --> Input Class Initialized
INFO - 2025-05-15 14:31:04 --> Language Class Initialized
INFO - 2025-05-15 14:31:04 --> Loader Class Initialized
INFO - 2025-05-15 14:31:04 --> Helper loaded: url_helper
INFO - 2025-05-15 14:31:04 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:31:04 --> Helper loaded: form_helper
INFO - 2025-05-15 14:31:04 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:31:04 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:31:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:31:04 --> Form Validation Class Initialized
INFO - 2025-05-15 14:31:04 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:31:04 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:31:04 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:31:04 --> Controller Class Initialized
INFO - 2025-05-15 14:31:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:31:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:31:04 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:31:04 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:31:04 --> Final output sent to browser
DEBUG - 2025-05-15 14:31:04 --> Total execution time: 0.0099
INFO - 2025-05-15 14:31:08 --> Config Class Initialized
INFO - 2025-05-15 14:31:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:31:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:31:08 --> Utf8 Class Initialized
INFO - 2025-05-15 14:31:08 --> URI Class Initialized
INFO - 2025-05-15 14:31:08 --> Router Class Initialized
INFO - 2025-05-15 14:31:08 --> Output Class Initialized
INFO - 2025-05-15 14:31:08 --> Security Class Initialized
DEBUG - 2025-05-15 14:31:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:31:08 --> Input Class Initialized
INFO - 2025-05-15 14:31:08 --> Language Class Initialized
INFO - 2025-05-15 14:31:08 --> Loader Class Initialized
INFO - 2025-05-15 14:31:08 --> Helper loaded: url_helper
INFO - 2025-05-15 14:31:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:31:08 --> Helper loaded: form_helper
INFO - 2025-05-15 14:31:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:31:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:31:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:31:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:31:08 --> Form Validation Class Initialized
INFO - 2025-05-15 14:31:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:31:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:31:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:31:08 --> Controller Class Initialized
INFO - 2025-05-15 14:31:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:31:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:31:08 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:31:08 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:31:08 --> Final output sent to browser
DEBUG - 2025-05-15 14:31:08 --> Total execution time: 0.0173
INFO - 2025-05-15 14:36:06 --> Config Class Initialized
INFO - 2025-05-15 14:36:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:06 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:06 --> URI Class Initialized
INFO - 2025-05-15 14:36:06 --> Router Class Initialized
INFO - 2025-05-15 14:36:06 --> Output Class Initialized
INFO - 2025-05-15 14:36:06 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:06 --> Input Class Initialized
INFO - 2025-05-15 14:36:06 --> Language Class Initialized
INFO - 2025-05-15 14:36:06 --> Loader Class Initialized
INFO - 2025-05-15 14:36:06 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:06 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:06 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:06 --> Controller Class Initialized
INFO - 2025-05-15 14:36:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:06 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:06 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:06 --> Total execution time: 0.0111
INFO - 2025-05-15 14:36:07 --> Config Class Initialized
INFO - 2025-05-15 14:36:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:07 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:07 --> URI Class Initialized
INFO - 2025-05-15 14:36:07 --> Router Class Initialized
INFO - 2025-05-15 14:36:07 --> Output Class Initialized
INFO - 2025-05-15 14:36:07 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:07 --> Input Class Initialized
INFO - 2025-05-15 14:36:07 --> Language Class Initialized
INFO - 2025-05-15 14:36:07 --> Loader Class Initialized
INFO - 2025-05-15 14:36:07 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:07 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:07 --> Controller Class Initialized
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:07 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:07 --> Total execution time: 0.0114
INFO - 2025-05-15 14:36:07 --> Config Class Initialized
INFO - 2025-05-15 14:36:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:07 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:07 --> URI Class Initialized
INFO - 2025-05-15 14:36:07 --> Router Class Initialized
INFO - 2025-05-15 14:36:07 --> Output Class Initialized
INFO - 2025-05-15 14:36:07 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:07 --> Input Class Initialized
INFO - 2025-05-15 14:36:07 --> Language Class Initialized
INFO - 2025-05-15 14:36:07 --> Loader Class Initialized
INFO - 2025-05-15 14:36:07 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:07 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:07 --> Controller Class Initialized
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:07 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:07 --> Total execution time: 0.0094
INFO - 2025-05-15 14:36:07 --> Config Class Initialized
INFO - 2025-05-15 14:36:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:07 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:07 --> URI Class Initialized
INFO - 2025-05-15 14:36:07 --> Router Class Initialized
INFO - 2025-05-15 14:36:07 --> Output Class Initialized
INFO - 2025-05-15 14:36:07 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:07 --> Input Class Initialized
INFO - 2025-05-15 14:36:07 --> Language Class Initialized
INFO - 2025-05-15 14:36:07 --> Loader Class Initialized
INFO - 2025-05-15 14:36:07 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:07 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:07 --> Controller Class Initialized
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:07 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:07 --> Total execution time: 0.0406
INFO - 2025-05-15 14:36:07 --> Config Class Initialized
INFO - 2025-05-15 14:36:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:07 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:07 --> URI Class Initialized
INFO - 2025-05-15 14:36:07 --> Router Class Initialized
INFO - 2025-05-15 14:36:07 --> Output Class Initialized
INFO - 2025-05-15 14:36:07 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:07 --> Input Class Initialized
INFO - 2025-05-15 14:36:07 --> Language Class Initialized
INFO - 2025-05-15 14:36:07 --> Loader Class Initialized
INFO - 2025-05-15 14:36:07 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:07 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:07 --> Controller Class Initialized
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:07 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:07 --> Total execution time: 0.0091
INFO - 2025-05-15 14:36:09 --> Config Class Initialized
INFO - 2025-05-15 14:36:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:09 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:09 --> URI Class Initialized
INFO - 2025-05-15 14:36:09 --> Router Class Initialized
INFO - 2025-05-15 14:36:09 --> Output Class Initialized
INFO - 2025-05-15 14:36:09 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:09 --> Input Class Initialized
INFO - 2025-05-15 14:36:09 --> Language Class Initialized
INFO - 2025-05-15 14:36:09 --> Loader Class Initialized
INFO - 2025-05-15 14:36:09 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:09 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:09 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:09 --> Controller Class Initialized
INFO - 2025-05-15 14:36:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:09 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:09 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:09 --> Total execution time: 0.0336
INFO - 2025-05-15 14:36:10 --> Config Class Initialized
INFO - 2025-05-15 14:36:10 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:10 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:10 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:10 --> URI Class Initialized
INFO - 2025-05-15 14:36:10 --> Router Class Initialized
INFO - 2025-05-15 14:36:10 --> Output Class Initialized
INFO - 2025-05-15 14:36:10 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:10 --> Input Class Initialized
INFO - 2025-05-15 14:36:10 --> Language Class Initialized
INFO - 2025-05-15 14:36:10 --> Loader Class Initialized
INFO - 2025-05-15 14:36:10 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:10 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:10 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:10 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:10 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:10 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:10 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:10 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:10 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:10 --> Controller Class Initialized
INFO - 2025-05-15 14:36:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:10 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:10 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:10 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:10 --> Total execution time: 0.0284
INFO - 2025-05-15 14:36:15 --> Config Class Initialized
INFO - 2025-05-15 14:36:15 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:15 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:15 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:15 --> URI Class Initialized
INFO - 2025-05-15 14:36:15 --> Router Class Initialized
INFO - 2025-05-15 14:36:15 --> Output Class Initialized
INFO - 2025-05-15 14:36:15 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:15 --> Input Class Initialized
INFO - 2025-05-15 14:36:15 --> Language Class Initialized
INFO - 2025-05-15 14:36:15 --> Loader Class Initialized
INFO - 2025-05-15 14:36:15 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:15 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:15 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:15 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:15 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:15 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:15 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:15 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:15 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:15 --> Controller Class Initialized
INFO - 2025-05-15 14:36:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:15 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:15 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:15 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:15 --> Total execution time: 0.0296
INFO - 2025-05-15 14:36:16 --> Config Class Initialized
INFO - 2025-05-15 14:36:16 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:16 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:16 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:16 --> URI Class Initialized
INFO - 2025-05-15 14:36:16 --> Router Class Initialized
INFO - 2025-05-15 14:36:16 --> Output Class Initialized
INFO - 2025-05-15 14:36:16 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:16 --> Input Class Initialized
INFO - 2025-05-15 14:36:16 --> Language Class Initialized
INFO - 2025-05-15 14:36:16 --> Loader Class Initialized
INFO - 2025-05-15 14:36:16 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:16 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:16 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:16 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:16 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:16 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:16 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:16 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:16 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:16 --> Controller Class Initialized
INFO - 2025-05-15 14:36:16 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:16 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:16 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:16 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:16 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:16 --> Total execution time: 0.0392
INFO - 2025-05-15 14:36:17 --> Config Class Initialized
INFO - 2025-05-15 14:36:17 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:17 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:17 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:17 --> URI Class Initialized
INFO - 2025-05-15 14:36:17 --> Router Class Initialized
INFO - 2025-05-15 14:36:17 --> Output Class Initialized
INFO - 2025-05-15 14:36:17 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:17 --> Input Class Initialized
INFO - 2025-05-15 14:36:17 --> Language Class Initialized
INFO - 2025-05-15 14:36:17 --> Loader Class Initialized
INFO - 2025-05-15 14:36:17 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:17 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:17 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:17 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:17 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:17 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:17 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:17 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:17 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:17 --> Controller Class Initialized
INFO - 2025-05-15 14:36:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:36:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:36:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:36:17 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:36:17 --> Final output sent to browser
DEBUG - 2025-05-15 14:36:17 --> Total execution time: 0.0226
INFO - 2025-05-15 14:36:19 --> Config Class Initialized
INFO - 2025-05-15 14:36:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:36:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:36:19 --> Utf8 Class Initialized
INFO - 2025-05-15 14:36:19 --> URI Class Initialized
INFO - 2025-05-15 14:36:19 --> Router Class Initialized
INFO - 2025-05-15 14:36:19 --> Output Class Initialized
INFO - 2025-05-15 14:36:19 --> Security Class Initialized
DEBUG - 2025-05-15 14:36:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:36:19 --> Input Class Initialized
INFO - 2025-05-15 14:36:19 --> Language Class Initialized
INFO - 2025-05-15 14:36:19 --> Loader Class Initialized
INFO - 2025-05-15 14:36:19 --> Helper loaded: url_helper
INFO - 2025-05-15 14:36:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:36:19 --> Helper loaded: form_helper
INFO - 2025-05-15 14:36:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:36:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:36:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:36:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:36:19 --> Form Validation Class Initialized
INFO - 2025-05-15 14:36:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:36:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:36:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:36:19 --> Controller Class Initialized
DEBUG - 2025-05-15 14:36:19 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-09'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:38:22 --> Config Class Initialized
INFO - 2025-05-15 14:38:22 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:38:22 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:38:22 --> Utf8 Class Initialized
INFO - 2025-05-15 14:38:22 --> URI Class Initialized
INFO - 2025-05-15 14:38:22 --> Router Class Initialized
INFO - 2025-05-15 14:38:22 --> Output Class Initialized
INFO - 2025-05-15 14:38:22 --> Security Class Initialized
DEBUG - 2025-05-15 14:38:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:38:22 --> Input Class Initialized
INFO - 2025-05-15 14:38:22 --> Language Class Initialized
INFO - 2025-05-15 14:38:22 --> Loader Class Initialized
INFO - 2025-05-15 14:38:22 --> Helper loaded: url_helper
INFO - 2025-05-15 14:38:22 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:38:22 --> Helper loaded: form_helper
INFO - 2025-05-15 14:38:22 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:38:22 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:38:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:38:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:38:22 --> Form Validation Class Initialized
INFO - 2025-05-15 14:38:22 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:38:22 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:38:22 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:38:22 --> Controller Class Initialized
INFO - 2025-05-15 14:38:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:38:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:38:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:38:22 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:38:22 --> Final output sent to browser
DEBUG - 2025-05-15 14:38:22 --> Total execution time: 0.0149
INFO - 2025-05-15 14:38:24 --> Config Class Initialized
INFO - 2025-05-15 14:38:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:38:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:38:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:38:24 --> URI Class Initialized
INFO - 2025-05-15 14:38:24 --> Router Class Initialized
INFO - 2025-05-15 14:38:24 --> Output Class Initialized
INFO - 2025-05-15 14:38:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:38:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:38:24 --> Input Class Initialized
INFO - 2025-05-15 14:38:24 --> Language Class Initialized
INFO - 2025-05-15 14:38:24 --> Loader Class Initialized
INFO - 2025-05-15 14:38:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:38:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:38:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:38:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:38:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:38:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:38:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:38:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:38:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:38:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:38:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:38:24 --> Controller Class Initialized
INFO - 2025-05-15 14:38:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:38:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:38:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:38:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:38:24 --> Final output sent to browser
DEBUG - 2025-05-15 14:38:24 --> Total execution time: 0.0410
INFO - 2025-05-15 14:38:27 --> Config Class Initialized
INFO - 2025-05-15 14:38:27 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:38:27 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:38:27 --> Utf8 Class Initialized
INFO - 2025-05-15 14:38:27 --> URI Class Initialized
INFO - 2025-05-15 14:38:27 --> Router Class Initialized
INFO - 2025-05-15 14:38:27 --> Output Class Initialized
INFO - 2025-05-15 14:38:27 --> Security Class Initialized
DEBUG - 2025-05-15 14:38:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:38:27 --> Input Class Initialized
INFO - 2025-05-15 14:38:27 --> Language Class Initialized
INFO - 2025-05-15 14:38:27 --> Loader Class Initialized
INFO - 2025-05-15 14:38:27 --> Helper loaded: url_helper
INFO - 2025-05-15 14:38:27 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:38:27 --> Helper loaded: form_helper
INFO - 2025-05-15 14:38:27 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:38:27 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:38:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:38:27 --> Form Validation Class Initialized
INFO - 2025-05-15 14:38:27 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:38:27 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:38:27 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:38:27 --> Controller Class Initialized
INFO - 2025-05-15 14:38:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:38:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:38:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:38:27 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:38:27 --> Final output sent to browser
DEBUG - 2025-05-15 14:38:27 --> Total execution time: 0.0307
INFO - 2025-05-15 14:38:29 --> Config Class Initialized
INFO - 2025-05-15 14:38:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:38:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:38:29 --> Utf8 Class Initialized
INFO - 2025-05-15 14:38:29 --> URI Class Initialized
INFO - 2025-05-15 14:38:29 --> Router Class Initialized
INFO - 2025-05-15 14:38:29 --> Output Class Initialized
INFO - 2025-05-15 14:38:29 --> Security Class Initialized
DEBUG - 2025-05-15 14:38:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:38:29 --> Input Class Initialized
INFO - 2025-05-15 14:38:29 --> Language Class Initialized
INFO - 2025-05-15 14:38:29 --> Loader Class Initialized
INFO - 2025-05-15 14:38:29 --> Helper loaded: url_helper
INFO - 2025-05-15 14:38:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:38:29 --> Helper loaded: form_helper
INFO - 2025-05-15 14:38:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:38:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:38:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:38:29 --> Form Validation Class Initialized
INFO - 2025-05-15 14:38:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:38:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:38:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:38:29 --> Controller Class Initialized
DEBUG - 2025-05-15 14:38:29 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-09'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:39:41 --> Config Class Initialized
INFO - 2025-05-15 14:39:41 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:39:41 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:39:41 --> Utf8 Class Initialized
INFO - 2025-05-15 14:39:41 --> URI Class Initialized
INFO - 2025-05-15 14:39:41 --> Router Class Initialized
INFO - 2025-05-15 14:39:41 --> Output Class Initialized
INFO - 2025-05-15 14:39:41 --> Security Class Initialized
DEBUG - 2025-05-15 14:39:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:39:41 --> Input Class Initialized
INFO - 2025-05-15 14:39:41 --> Language Class Initialized
INFO - 2025-05-15 14:39:41 --> Loader Class Initialized
INFO - 2025-05-15 14:39:41 --> Helper loaded: url_helper
INFO - 2025-05-15 14:39:41 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:39:41 --> Helper loaded: form_helper
INFO - 2025-05-15 14:39:41 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:39:41 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:39:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:39:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:39:41 --> Form Validation Class Initialized
INFO - 2025-05-15 14:39:41 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:39:41 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:39:41 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:39:41 --> Controller Class Initialized
INFO - 2025-05-15 14:39:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:39:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:39:41 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:39:41 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:39:41 --> Final output sent to browser
DEBUG - 2025-05-15 14:39:41 --> Total execution time: 0.0320
INFO - 2025-05-15 14:39:45 --> Config Class Initialized
INFO - 2025-05-15 14:39:45 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:39:45 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:39:45 --> Utf8 Class Initialized
INFO - 2025-05-15 14:39:45 --> URI Class Initialized
INFO - 2025-05-15 14:39:45 --> Router Class Initialized
INFO - 2025-05-15 14:39:45 --> Output Class Initialized
INFO - 2025-05-15 14:39:45 --> Security Class Initialized
DEBUG - 2025-05-15 14:39:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:39:45 --> Input Class Initialized
INFO - 2025-05-15 14:39:45 --> Language Class Initialized
INFO - 2025-05-15 14:39:45 --> Loader Class Initialized
INFO - 2025-05-15 14:39:45 --> Helper loaded: url_helper
INFO - 2025-05-15 14:39:45 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:39:45 --> Helper loaded: form_helper
INFO - 2025-05-15 14:39:45 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:39:45 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:39:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:39:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:39:45 --> Form Validation Class Initialized
INFO - 2025-05-15 14:39:45 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:39:45 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:39:45 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:39:45 --> Controller Class Initialized
INFO - 2025-05-15 14:39:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:39:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:39:45 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:39:45 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:39:45 --> Final output sent to browser
DEBUG - 2025-05-15 14:39:45 --> Total execution time: 0.0096
INFO - 2025-05-15 14:39:46 --> Config Class Initialized
INFO - 2025-05-15 14:39:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:39:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:39:46 --> Utf8 Class Initialized
INFO - 2025-05-15 14:39:46 --> URI Class Initialized
INFO - 2025-05-15 14:39:46 --> Router Class Initialized
INFO - 2025-05-15 14:39:46 --> Output Class Initialized
INFO - 2025-05-15 14:39:46 --> Security Class Initialized
DEBUG - 2025-05-15 14:39:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:39:46 --> Input Class Initialized
INFO - 2025-05-15 14:39:46 --> Language Class Initialized
INFO - 2025-05-15 14:39:46 --> Loader Class Initialized
INFO - 2025-05-15 14:39:46 --> Helper loaded: url_helper
INFO - 2025-05-15 14:39:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:39:46 --> Helper loaded: form_helper
INFO - 2025-05-15 14:39:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:39:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:39:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:39:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:39:46 --> Form Validation Class Initialized
INFO - 2025-05-15 14:39:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:39:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:39:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:39:46 --> Controller Class Initialized
DEBUG - 2025-05-15 14:39:46 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-07'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:44:01 --> Config Class Initialized
INFO - 2025-05-15 14:44:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:44:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:44:01 --> Utf8 Class Initialized
INFO - 2025-05-15 14:44:01 --> URI Class Initialized
INFO - 2025-05-15 14:44:01 --> Router Class Initialized
INFO - 2025-05-15 14:44:01 --> Output Class Initialized
INFO - 2025-05-15 14:44:01 --> Security Class Initialized
DEBUG - 2025-05-15 14:44:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:44:01 --> Input Class Initialized
INFO - 2025-05-15 14:44:01 --> Language Class Initialized
INFO - 2025-05-15 14:44:01 --> Loader Class Initialized
INFO - 2025-05-15 14:44:01 --> Helper loaded: url_helper
INFO - 2025-05-15 14:44:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:44:01 --> Helper loaded: form_helper
INFO - 2025-05-15 14:44:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:44:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:44:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:44:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:44:01 --> Form Validation Class Initialized
INFO - 2025-05-15 14:44:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:44:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:44:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:44:01 --> Controller Class Initialized
INFO - 2025-05-15 14:44:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:44:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:44:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:44:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:44:01 --> Final output sent to browser
DEBUG - 2025-05-15 14:44:01 --> Total execution time: 0.0110
INFO - 2025-05-15 14:44:03 --> Config Class Initialized
INFO - 2025-05-15 14:44:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:44:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:44:03 --> Utf8 Class Initialized
INFO - 2025-05-15 14:44:03 --> URI Class Initialized
INFO - 2025-05-15 14:44:03 --> Router Class Initialized
INFO - 2025-05-15 14:44:03 --> Output Class Initialized
INFO - 2025-05-15 14:44:03 --> Security Class Initialized
DEBUG - 2025-05-15 14:44:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:44:03 --> Input Class Initialized
INFO - 2025-05-15 14:44:03 --> Language Class Initialized
INFO - 2025-05-15 14:44:03 --> Loader Class Initialized
INFO - 2025-05-15 14:44:03 --> Helper loaded: url_helper
INFO - 2025-05-15 14:44:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:44:03 --> Helper loaded: form_helper
INFO - 2025-05-15 14:44:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:44:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:44:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:44:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:44:03 --> Form Validation Class Initialized
INFO - 2025-05-15 14:44:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:44:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:44:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:44:03 --> Controller Class Initialized
DEBUG - 2025-05-15 14:44:03 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-07'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:44:37 --> Config Class Initialized
INFO - 2025-05-15 14:44:37 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:44:37 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:44:37 --> Utf8 Class Initialized
INFO - 2025-05-15 14:44:37 --> URI Class Initialized
INFO - 2025-05-15 14:44:37 --> Router Class Initialized
INFO - 2025-05-15 14:44:37 --> Output Class Initialized
INFO - 2025-05-15 14:44:37 --> Security Class Initialized
DEBUG - 2025-05-15 14:44:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:44:37 --> Input Class Initialized
INFO - 2025-05-15 14:44:37 --> Language Class Initialized
INFO - 2025-05-15 14:44:37 --> Loader Class Initialized
INFO - 2025-05-15 14:44:37 --> Helper loaded: url_helper
INFO - 2025-05-15 14:44:37 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:44:37 --> Helper loaded: form_helper
INFO - 2025-05-15 14:44:37 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:44:37 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:44:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:44:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:44:37 --> Form Validation Class Initialized
INFO - 2025-05-15 14:44:37 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:44:37 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:44:37 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:44:37 --> Controller Class Initialized
INFO - 2025-05-15 14:44:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:44:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:44:37 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:44:37 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:44:37 --> Final output sent to browser
DEBUG - 2025-05-15 14:44:37 --> Total execution time: 0.0268
INFO - 2025-05-15 14:44:38 --> Config Class Initialized
INFO - 2025-05-15 14:44:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:44:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:44:38 --> Utf8 Class Initialized
INFO - 2025-05-15 14:44:38 --> URI Class Initialized
INFO - 2025-05-15 14:44:38 --> Router Class Initialized
INFO - 2025-05-15 14:44:38 --> Output Class Initialized
INFO - 2025-05-15 14:44:38 --> Security Class Initialized
DEBUG - 2025-05-15 14:44:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:44:38 --> Input Class Initialized
INFO - 2025-05-15 14:44:38 --> Language Class Initialized
INFO - 2025-05-15 14:44:38 --> Loader Class Initialized
INFO - 2025-05-15 14:44:38 --> Helper loaded: url_helper
INFO - 2025-05-15 14:44:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:44:38 --> Helper loaded: form_helper
INFO - 2025-05-15 14:44:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:44:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:44:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:44:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:44:38 --> Form Validation Class Initialized
INFO - 2025-05-15 14:44:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:44:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:44:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:44:38 --> Controller Class Initialized
DEBUG - 2025-05-15 14:44:38 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:46:01 --> Config Class Initialized
INFO - 2025-05-15 14:46:01 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:01 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:01 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:01 --> URI Class Initialized
INFO - 2025-05-15 14:46:01 --> Router Class Initialized
INFO - 2025-05-15 14:46:01 --> Output Class Initialized
INFO - 2025-05-15 14:46:01 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:01 --> Input Class Initialized
INFO - 2025-05-15 14:46:01 --> Language Class Initialized
INFO - 2025-05-15 14:46:01 --> Loader Class Initialized
INFO - 2025-05-15 14:46:01 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:01 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:01 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:01 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:01 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:01 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:01 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:01 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:01 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:01 --> Controller Class Initialized
INFO - 2025-05-15 14:46:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:01 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:01 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:01 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:01 --> Total execution time: 0.0239
INFO - 2025-05-15 14:46:07 --> Config Class Initialized
INFO - 2025-05-15 14:46:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:07 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:07 --> URI Class Initialized
INFO - 2025-05-15 14:46:07 --> Router Class Initialized
INFO - 2025-05-15 14:46:07 --> Output Class Initialized
INFO - 2025-05-15 14:46:07 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:07 --> Input Class Initialized
INFO - 2025-05-15 14:46:07 --> Language Class Initialized
INFO - 2025-05-15 14:46:07 --> Loader Class Initialized
INFO - 2025-05-15 14:46:07 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:07 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:07 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:07 --> Controller Class Initialized
DEBUG - 2025-05-15 14:46:07 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:46:24 --> Config Class Initialized
INFO - 2025-05-15 14:46:24 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:24 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:24 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:24 --> URI Class Initialized
INFO - 2025-05-15 14:46:24 --> Router Class Initialized
INFO - 2025-05-15 14:46:24 --> Output Class Initialized
INFO - 2025-05-15 14:46:24 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:24 --> Input Class Initialized
INFO - 2025-05-15 14:46:24 --> Language Class Initialized
INFO - 2025-05-15 14:46:24 --> Loader Class Initialized
INFO - 2025-05-15 14:46:24 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:24 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:24 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:24 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:24 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:24 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:24 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:24 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:24 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:24 --> Controller Class Initialized
INFO - 2025-05-15 14:46:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:24 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:24 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:24 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:24 --> Total execution time: 0.0166
INFO - 2025-05-15 14:46:25 --> Config Class Initialized
INFO - 2025-05-15 14:46:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:25 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:25 --> URI Class Initialized
INFO - 2025-05-15 14:46:25 --> Router Class Initialized
INFO - 2025-05-15 14:46:25 --> Output Class Initialized
INFO - 2025-05-15 14:46:25 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:25 --> Input Class Initialized
INFO - 2025-05-15 14:46:25 --> Language Class Initialized
INFO - 2025-05-15 14:46:25 --> Loader Class Initialized
INFO - 2025-05-15 14:46:25 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:25 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:25 --> Controller Class Initialized
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:25 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:25 --> Total execution time: 0.0114
INFO - 2025-05-15 14:46:25 --> Config Class Initialized
INFO - 2025-05-15 14:46:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:25 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:25 --> URI Class Initialized
INFO - 2025-05-15 14:46:25 --> Router Class Initialized
INFO - 2025-05-15 14:46:25 --> Output Class Initialized
INFO - 2025-05-15 14:46:25 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:25 --> Input Class Initialized
INFO - 2025-05-15 14:46:25 --> Language Class Initialized
INFO - 2025-05-15 14:46:25 --> Loader Class Initialized
INFO - 2025-05-15 14:46:25 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:25 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:25 --> Controller Class Initialized
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:25 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:25 --> Total execution time: 0.0405
INFO - 2025-05-15 14:46:25 --> Config Class Initialized
INFO - 2025-05-15 14:46:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:25 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:25 --> URI Class Initialized
INFO - 2025-05-15 14:46:25 --> Router Class Initialized
INFO - 2025-05-15 14:46:25 --> Output Class Initialized
INFO - 2025-05-15 14:46:25 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:25 --> Input Class Initialized
INFO - 2025-05-15 14:46:25 --> Language Class Initialized
INFO - 2025-05-15 14:46:25 --> Loader Class Initialized
INFO - 2025-05-15 14:46:25 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:25 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:25 --> Controller Class Initialized
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:25 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:25 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:25 --> Total execution time: 0.0092
INFO - 2025-05-15 14:46:26 --> Config Class Initialized
INFO - 2025-05-15 14:46:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:26 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:26 --> URI Class Initialized
INFO - 2025-05-15 14:46:26 --> Router Class Initialized
INFO - 2025-05-15 14:46:26 --> Output Class Initialized
INFO - 2025-05-15 14:46:26 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:26 --> Input Class Initialized
INFO - 2025-05-15 14:46:26 --> Language Class Initialized
INFO - 2025-05-15 14:46:26 --> Loader Class Initialized
INFO - 2025-05-15 14:46:26 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:26 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:26 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:26 --> Controller Class Initialized
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:26 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:26 --> Total execution time: 0.0408
INFO - 2025-05-15 14:46:26 --> Config Class Initialized
INFO - 2025-05-15 14:46:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:46:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:46:26 --> Utf8 Class Initialized
INFO - 2025-05-15 14:46:26 --> URI Class Initialized
INFO - 2025-05-15 14:46:26 --> Router Class Initialized
INFO - 2025-05-15 14:46:26 --> Output Class Initialized
INFO - 2025-05-15 14:46:26 --> Security Class Initialized
DEBUG - 2025-05-15 14:46:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:46:26 --> Input Class Initialized
INFO - 2025-05-15 14:46:26 --> Language Class Initialized
INFO - 2025-05-15 14:46:26 --> Loader Class Initialized
INFO - 2025-05-15 14:46:26 --> Helper loaded: url_helper
INFO - 2025-05-15 14:46:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:46:26 --> Helper loaded: form_helper
INFO - 2025-05-15 14:46:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:46:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:46:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:46:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:46:26 --> Form Validation Class Initialized
INFO - 2025-05-15 14:46:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:46:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:46:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:46:26 --> Controller Class Initialized
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:46:26 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:46:26 --> Final output sent to browser
DEBUG - 2025-05-15 14:46:26 --> Total execution time: 0.0293
INFO - 2025-05-15 14:49:11 --> Config Class Initialized
INFO - 2025-05-15 14:49:11 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:49:11 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:49:11 --> Utf8 Class Initialized
INFO - 2025-05-15 14:49:11 --> URI Class Initialized
INFO - 2025-05-15 14:49:11 --> Router Class Initialized
INFO - 2025-05-15 14:49:11 --> Output Class Initialized
INFO - 2025-05-15 14:49:11 --> Security Class Initialized
DEBUG - 2025-05-15 14:49:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:49:11 --> Input Class Initialized
INFO - 2025-05-15 14:49:11 --> Language Class Initialized
INFO - 2025-05-15 14:49:11 --> Loader Class Initialized
INFO - 2025-05-15 14:49:11 --> Helper loaded: url_helper
INFO - 2025-05-15 14:49:11 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:49:11 --> Helper loaded: form_helper
INFO - 2025-05-15 14:49:11 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:49:11 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:49:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:49:11 --> Form Validation Class Initialized
INFO - 2025-05-15 14:49:11 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:49:11 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:49:11 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:49:11 --> Controller Class Initialized
INFO - 2025-05-15 14:49:11 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:49:11 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:49:11 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:49:11 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:49:11 --> Final output sent to browser
DEBUG - 2025-05-15 14:49:11 --> Total execution time: 0.0333
INFO - 2025-05-15 14:49:31 --> Config Class Initialized
INFO - 2025-05-15 14:49:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:49:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:49:31 --> Utf8 Class Initialized
INFO - 2025-05-15 14:49:31 --> URI Class Initialized
INFO - 2025-05-15 14:49:31 --> Router Class Initialized
INFO - 2025-05-15 14:49:31 --> Output Class Initialized
INFO - 2025-05-15 14:49:31 --> Security Class Initialized
DEBUG - 2025-05-15 14:49:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:49:31 --> Input Class Initialized
INFO - 2025-05-15 14:49:31 --> Language Class Initialized
INFO - 2025-05-15 14:49:31 --> Loader Class Initialized
INFO - 2025-05-15 14:49:31 --> Helper loaded: url_helper
INFO - 2025-05-15 14:49:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:49:31 --> Helper loaded: form_helper
INFO - 2025-05-15 14:49:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:49:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:49:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:49:31 --> Form Validation Class Initialized
INFO - 2025-05-15 14:49:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:49:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:49:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:49:31 --> Controller Class Initialized
INFO - 2025-05-15 14:49:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:49:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:49:31 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:49:31 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:49:31 --> Final output sent to browser
DEBUG - 2025-05-15 14:49:31 --> Total execution time: 0.0185
INFO - 2025-05-15 14:49:35 --> Config Class Initialized
INFO - 2025-05-15 14:49:35 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:49:35 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:49:35 --> Utf8 Class Initialized
INFO - 2025-05-15 14:49:35 --> URI Class Initialized
INFO - 2025-05-15 14:49:35 --> Router Class Initialized
INFO - 2025-05-15 14:49:35 --> Output Class Initialized
INFO - 2025-05-15 14:49:35 --> Security Class Initialized
DEBUG - 2025-05-15 14:49:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:49:35 --> Input Class Initialized
INFO - 2025-05-15 14:49:35 --> Language Class Initialized
INFO - 2025-05-15 14:49:35 --> Loader Class Initialized
INFO - 2025-05-15 14:49:35 --> Helper loaded: url_helper
INFO - 2025-05-15 14:49:35 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:49:35 --> Helper loaded: form_helper
INFO - 2025-05-15 14:49:35 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:49:35 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:49:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:49:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:49:35 --> Form Validation Class Initialized
INFO - 2025-05-15 14:49:35 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:49:35 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:49:35 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:49:35 --> Controller Class Initialized
INFO - 2025-05-15 14:49:35 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:49:35 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:49:35 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:49:35 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:49:35 --> Final output sent to browser
DEBUG - 2025-05-15 14:49:35 --> Total execution time: 0.0101
INFO - 2025-05-15 14:52:52 --> Config Class Initialized
INFO - 2025-05-15 14:52:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:52:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:52:52 --> Utf8 Class Initialized
INFO - 2025-05-15 14:52:52 --> URI Class Initialized
DEBUG - 2025-05-15 14:52:52 --> No URI present. Default controller set.
INFO - 2025-05-15 14:52:52 --> Router Class Initialized
INFO - 2025-05-15 14:52:52 --> Output Class Initialized
INFO - 2025-05-15 14:52:52 --> Security Class Initialized
DEBUG - 2025-05-15 14:52:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:52:52 --> Input Class Initialized
INFO - 2025-05-15 14:52:52 --> Language Class Initialized
INFO - 2025-05-15 14:52:52 --> Loader Class Initialized
INFO - 2025-05-15 14:52:52 --> Helper loaded: url_helper
INFO - 2025-05-15 14:52:52 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:52:52 --> Helper loaded: form_helper
INFO - 2025-05-15 14:52:52 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:52:52 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:52:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:52:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:52:52 --> Form Validation Class Initialized
INFO - 2025-05-15 14:52:52 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:52:52 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:52:52 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:52:52 --> Controller Class Initialized
INFO - 2025-05-15 14:52:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:52:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:52:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:52:52 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:52:52 --> Final output sent to browser
DEBUG - 2025-05-15 14:52:52 --> Total execution time: 0.0258
INFO - 2025-05-15 14:53:13 --> Config Class Initialized
INFO - 2025-05-15 14:53:13 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:53:13 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:53:13 --> Utf8 Class Initialized
INFO - 2025-05-15 14:53:13 --> URI Class Initialized
DEBUG - 2025-05-15 14:53:13 --> No URI present. Default controller set.
INFO - 2025-05-15 14:53:13 --> Router Class Initialized
INFO - 2025-05-15 14:53:13 --> Output Class Initialized
INFO - 2025-05-15 14:53:13 --> Security Class Initialized
DEBUG - 2025-05-15 14:53:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:53:13 --> Input Class Initialized
INFO - 2025-05-15 14:53:13 --> Language Class Initialized
INFO - 2025-05-15 14:53:13 --> Loader Class Initialized
INFO - 2025-05-15 14:53:13 --> Helper loaded: url_helper
INFO - 2025-05-15 14:53:13 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:53:13 --> Helper loaded: form_helper
INFO - 2025-05-15 14:53:13 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:53:13 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:53:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:53:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:53:13 --> Form Validation Class Initialized
INFO - 2025-05-15 14:53:13 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:53:13 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:53:13 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:53:13 --> Controller Class Initialized
INFO - 2025-05-15 14:53:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:53:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:53:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:53:13 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:53:13 --> Final output sent to browser
DEBUG - 2025-05-15 14:53:13 --> Total execution time: 0.0125
INFO - 2025-05-15 14:53:19 --> Config Class Initialized
INFO - 2025-05-15 14:53:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:53:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:53:19 --> Utf8 Class Initialized
INFO - 2025-05-15 14:53:19 --> URI Class Initialized
DEBUG - 2025-05-15 14:53:19 --> No URI present. Default controller set.
INFO - 2025-05-15 14:53:19 --> Router Class Initialized
INFO - 2025-05-15 14:53:19 --> Output Class Initialized
INFO - 2025-05-15 14:53:19 --> Security Class Initialized
DEBUG - 2025-05-15 14:53:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:53:19 --> Input Class Initialized
INFO - 2025-05-15 14:53:19 --> Language Class Initialized
INFO - 2025-05-15 14:53:19 --> Loader Class Initialized
INFO - 2025-05-15 14:53:19 --> Helper loaded: url_helper
INFO - 2025-05-15 14:53:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:53:19 --> Helper loaded: form_helper
INFO - 2025-05-15 14:53:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:53:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:53:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:53:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:53:19 --> Form Validation Class Initialized
INFO - 2025-05-15 14:53:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:53:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:53:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:53:19 --> Controller Class Initialized
INFO - 2025-05-15 14:53:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:53:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:53:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:53:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:53:19 --> Final output sent to browser
DEBUG - 2025-05-15 14:53:19 --> Total execution time: 0.0230
INFO - 2025-05-15 14:53:30 --> Config Class Initialized
INFO - 2025-05-15 14:53:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:53:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:53:30 --> Utf8 Class Initialized
INFO - 2025-05-15 14:53:30 --> URI Class Initialized
INFO - 2025-05-15 14:53:30 --> Router Class Initialized
INFO - 2025-05-15 14:53:30 --> Output Class Initialized
INFO - 2025-05-15 14:53:30 --> Security Class Initialized
DEBUG - 2025-05-15 14:53:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:53:30 --> Input Class Initialized
INFO - 2025-05-15 14:53:30 --> Language Class Initialized
INFO - 2025-05-15 14:53:30 --> Loader Class Initialized
INFO - 2025-05-15 14:53:30 --> Helper loaded: url_helper
INFO - 2025-05-15 14:53:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:53:30 --> Helper loaded: form_helper
INFO - 2025-05-15 14:53:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:53:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:53:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:53:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:53:30 --> Form Validation Class Initialized
INFO - 2025-05-15 14:53:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:53:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:53:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:53:30 --> Controller Class Initialized
DEBUG - 2025-05-15 14:53:30 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 14:57:27 --> Config Class Initialized
INFO - 2025-05-15 14:57:27 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:27 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:27 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:27 --> URI Class Initialized
INFO - 2025-05-15 14:57:27 --> Router Class Initialized
INFO - 2025-05-15 14:57:27 --> Output Class Initialized
INFO - 2025-05-15 14:57:27 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:27 --> Input Class Initialized
INFO - 2025-05-15 14:57:27 --> Language Class Initialized
INFO - 2025-05-15 14:57:27 --> Loader Class Initialized
INFO - 2025-05-15 14:57:27 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:27 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:27 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:27 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:27 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:28 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:28 --> Controller Class Initialized
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:28 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:28 --> Total execution time: 0.0418
INFO - 2025-05-15 14:57:28 --> Config Class Initialized
INFO - 2025-05-15 14:57:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:28 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:28 --> URI Class Initialized
INFO - 2025-05-15 14:57:28 --> Router Class Initialized
INFO - 2025-05-15 14:57:28 --> Output Class Initialized
INFO - 2025-05-15 14:57:28 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:28 --> Input Class Initialized
INFO - 2025-05-15 14:57:28 --> Language Class Initialized
INFO - 2025-05-15 14:57:28 --> Loader Class Initialized
INFO - 2025-05-15 14:57:28 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:28 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:28 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:28 --> Controller Class Initialized
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:28 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:28 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:28 --> Total execution time: 0.0215
INFO - 2025-05-15 14:57:29 --> Config Class Initialized
INFO - 2025-05-15 14:57:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:29 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:29 --> URI Class Initialized
INFO - 2025-05-15 14:57:29 --> Router Class Initialized
INFO - 2025-05-15 14:57:29 --> Output Class Initialized
INFO - 2025-05-15 14:57:29 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:29 --> Input Class Initialized
INFO - 2025-05-15 14:57:29 --> Language Class Initialized
INFO - 2025-05-15 14:57:29 --> Loader Class Initialized
INFO - 2025-05-15 14:57:29 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:29 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:29 --> Controller Class Initialized
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:29 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:29 --> Total execution time: 0.0409
INFO - 2025-05-15 14:57:29 --> Config Class Initialized
INFO - 2025-05-15 14:57:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:29 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:29 --> URI Class Initialized
INFO - 2025-05-15 14:57:29 --> Router Class Initialized
INFO - 2025-05-15 14:57:29 --> Output Class Initialized
INFO - 2025-05-15 14:57:29 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:29 --> Input Class Initialized
INFO - 2025-05-15 14:57:29 --> Language Class Initialized
INFO - 2025-05-15 14:57:29 --> Loader Class Initialized
INFO - 2025-05-15 14:57:29 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:29 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:29 --> Controller Class Initialized
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:29 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:29 --> Total execution time: 0.0370
INFO - 2025-05-15 14:57:29 --> Config Class Initialized
INFO - 2025-05-15 14:57:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:29 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:29 --> URI Class Initialized
INFO - 2025-05-15 14:57:29 --> Router Class Initialized
INFO - 2025-05-15 14:57:29 --> Output Class Initialized
INFO - 2025-05-15 14:57:29 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:29 --> Input Class Initialized
INFO - 2025-05-15 14:57:29 --> Language Class Initialized
INFO - 2025-05-15 14:57:29 --> Loader Class Initialized
INFO - 2025-05-15 14:57:29 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:29 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:29 --> Controller Class Initialized
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:29 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:29 --> Total execution time: 0.0317
INFO - 2025-05-15 14:57:29 --> Config Class Initialized
INFO - 2025-05-15 14:57:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:29 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:29 --> URI Class Initialized
INFO - 2025-05-15 14:57:29 --> Router Class Initialized
INFO - 2025-05-15 14:57:29 --> Output Class Initialized
INFO - 2025-05-15 14:57:29 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:29 --> Input Class Initialized
INFO - 2025-05-15 14:57:29 --> Language Class Initialized
INFO - 2025-05-15 14:57:29 --> Loader Class Initialized
INFO - 2025-05-15 14:57:29 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:29 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:29 --> Controller Class Initialized
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:29 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:29 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:29 --> Total execution time: 0.0090
INFO - 2025-05-15 14:57:32 --> Config Class Initialized
INFO - 2025-05-15 14:57:32 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:32 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:32 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:32 --> URI Class Initialized
INFO - 2025-05-15 14:57:32 --> Router Class Initialized
INFO - 2025-05-15 14:57:32 --> Output Class Initialized
INFO - 2025-05-15 14:57:32 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:32 --> Input Class Initialized
INFO - 2025-05-15 14:57:32 --> Language Class Initialized
INFO - 2025-05-15 14:57:32 --> Loader Class Initialized
INFO - 2025-05-15 14:57:32 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:32 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:32 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:32 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:32 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:32 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:32 --> Controller Class Initialized
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:32 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:32 --> Total execution time: 0.0413
INFO - 2025-05-15 14:57:32 --> Config Class Initialized
INFO - 2025-05-15 14:57:32 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:32 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:32 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:32 --> URI Class Initialized
INFO - 2025-05-15 14:57:32 --> Router Class Initialized
INFO - 2025-05-15 14:57:32 --> Output Class Initialized
INFO - 2025-05-15 14:57:32 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:32 --> Input Class Initialized
INFO - 2025-05-15 14:57:32 --> Language Class Initialized
INFO - 2025-05-15 14:57:32 --> Loader Class Initialized
INFO - 2025-05-15 14:57:32 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:32 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:32 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:32 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:32 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:32 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:32 --> Controller Class Initialized
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:32 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:32 --> Total execution time: 0.0206
INFO - 2025-05-15 14:57:32 --> Config Class Initialized
INFO - 2025-05-15 14:57:32 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:32 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:32 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:32 --> URI Class Initialized
INFO - 2025-05-15 14:57:32 --> Router Class Initialized
INFO - 2025-05-15 14:57:32 --> Output Class Initialized
INFO - 2025-05-15 14:57:32 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:32 --> Input Class Initialized
INFO - 2025-05-15 14:57:32 --> Language Class Initialized
INFO - 2025-05-15 14:57:32 --> Loader Class Initialized
INFO - 2025-05-15 14:57:32 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:32 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:32 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:32 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:32 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:32 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:32 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:32 --> Controller Class Initialized
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:32 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:32 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:32 --> Total execution time: 0.0161
INFO - 2025-05-15 14:57:33 --> Config Class Initialized
INFO - 2025-05-15 14:57:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:33 --> URI Class Initialized
INFO - 2025-05-15 14:57:33 --> Router Class Initialized
INFO - 2025-05-15 14:57:33 --> Output Class Initialized
INFO - 2025-05-15 14:57:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:33 --> Input Class Initialized
INFO - 2025-05-15 14:57:33 --> Language Class Initialized
INFO - 2025-05-15 14:57:33 --> Loader Class Initialized
INFO - 2025-05-15 14:57:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:33 --> Controller Class Initialized
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:33 --> Total execution time: 0.0329
INFO - 2025-05-15 14:57:33 --> Config Class Initialized
INFO - 2025-05-15 14:57:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:33 --> URI Class Initialized
INFO - 2025-05-15 14:57:33 --> Router Class Initialized
INFO - 2025-05-15 14:57:33 --> Output Class Initialized
INFO - 2025-05-15 14:57:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:33 --> Input Class Initialized
INFO - 2025-05-15 14:57:33 --> Language Class Initialized
INFO - 2025-05-15 14:57:33 --> Loader Class Initialized
INFO - 2025-05-15 14:57:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:33 --> Controller Class Initialized
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:33 --> Total execution time: 0.0093
INFO - 2025-05-15 14:57:33 --> Config Class Initialized
INFO - 2025-05-15 14:57:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:33 --> URI Class Initialized
INFO - 2025-05-15 14:57:33 --> Router Class Initialized
INFO - 2025-05-15 14:57:33 --> Output Class Initialized
INFO - 2025-05-15 14:57:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:33 --> Input Class Initialized
INFO - 2025-05-15 14:57:33 --> Language Class Initialized
INFO - 2025-05-15 14:57:33 --> Loader Class Initialized
INFO - 2025-05-15 14:57:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:33 --> Controller Class Initialized
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:33 --> Total execution time: 0.0412
INFO - 2025-05-15 14:57:33 --> Config Class Initialized
INFO - 2025-05-15 14:57:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:33 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:33 --> URI Class Initialized
INFO - 2025-05-15 14:57:33 --> Router Class Initialized
INFO - 2025-05-15 14:57:33 --> Output Class Initialized
INFO - 2025-05-15 14:57:33 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:33 --> Input Class Initialized
INFO - 2025-05-15 14:57:33 --> Language Class Initialized
INFO - 2025-05-15 14:57:33 --> Loader Class Initialized
INFO - 2025-05-15 14:57:33 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:33 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:33 --> Controller Class Initialized
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:33 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:33 --> Total execution time: 0.0092
INFO - 2025-05-15 14:57:38 --> Config Class Initialized
INFO - 2025-05-15 14:57:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:57:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:57:38 --> Utf8 Class Initialized
INFO - 2025-05-15 14:57:38 --> URI Class Initialized
INFO - 2025-05-15 14:57:38 --> Router Class Initialized
INFO - 2025-05-15 14:57:38 --> Output Class Initialized
INFO - 2025-05-15 14:57:38 --> Security Class Initialized
DEBUG - 2025-05-15 14:57:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:57:38 --> Input Class Initialized
INFO - 2025-05-15 14:57:38 --> Language Class Initialized
INFO - 2025-05-15 14:57:38 --> Loader Class Initialized
INFO - 2025-05-15 14:57:38 --> Helper loaded: url_helper
INFO - 2025-05-15 14:57:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:57:38 --> Helper loaded: form_helper
INFO - 2025-05-15 14:57:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:57:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:57:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:57:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:57:38 --> Form Validation Class Initialized
INFO - 2025-05-15 14:57:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:57:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:57:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:57:38 --> Controller Class Initialized
INFO - 2025-05-15 14:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 14:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 14:57:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 14:57:38 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 14:57:38 --> Final output sent to browser
DEBUG - 2025-05-15 14:57:38 --> Total execution time: 0.0095
INFO - 2025-05-15 14:59:22 --> Config Class Initialized
INFO - 2025-05-15 14:59:22 --> Hooks Class Initialized
DEBUG - 2025-05-15 14:59:22 --> UTF-8 Support Enabled
INFO - 2025-05-15 14:59:22 --> Utf8 Class Initialized
INFO - 2025-05-15 14:59:22 --> URI Class Initialized
INFO - 2025-05-15 14:59:22 --> Router Class Initialized
INFO - 2025-05-15 14:59:22 --> Output Class Initialized
INFO - 2025-05-15 14:59:22 --> Security Class Initialized
DEBUG - 2025-05-15 14:59:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 14:59:22 --> Input Class Initialized
INFO - 2025-05-15 14:59:22 --> Language Class Initialized
INFO - 2025-05-15 14:59:22 --> Loader Class Initialized
INFO - 2025-05-15 14:59:22 --> Helper loaded: url_helper
INFO - 2025-05-15 14:59:22 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 14:59:22 --> Helper loaded: form_helper
INFO - 2025-05-15 14:59:22 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 14:59:22 --> Database Driver Class Initialized
DEBUG - 2025-05-15 14:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 14:59:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 14:59:22 --> Form Validation Class Initialized
INFO - 2025-05-15 14:59:22 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 14:59:22 --> Model "Barang_model" initialized
INFO - 2025-05-15 14:59:22 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 14:59:22 --> Controller Class Initialized
INFO - 2025-05-15 15:03:47 --> Config Class Initialized
INFO - 2025-05-15 15:03:47 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:03:47 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:03:47 --> Utf8 Class Initialized
INFO - 2025-05-15 15:03:47 --> URI Class Initialized
INFO - 2025-05-15 15:03:47 --> Router Class Initialized
INFO - 2025-05-15 15:03:47 --> Output Class Initialized
INFO - 2025-05-15 15:03:47 --> Security Class Initialized
DEBUG - 2025-05-15 15:03:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:03:47 --> Input Class Initialized
INFO - 2025-05-15 15:03:47 --> Language Class Initialized
INFO - 2025-05-15 15:03:47 --> Loader Class Initialized
INFO - 2025-05-15 15:03:47 --> Helper loaded: url_helper
INFO - 2025-05-15 15:03:47 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:03:47 --> Helper loaded: form_helper
INFO - 2025-05-15 15:03:47 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:03:47 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:03:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:03:47 --> Form Validation Class Initialized
INFO - 2025-05-15 15:03:47 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:03:47 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:03:47 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:03:47 --> Controller Class Initialized
INFO - 2025-05-15 15:03:50 --> Config Class Initialized
INFO - 2025-05-15 15:03:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:03:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:03:50 --> Utf8 Class Initialized
INFO - 2025-05-15 15:03:50 --> URI Class Initialized
INFO - 2025-05-15 15:03:50 --> Router Class Initialized
INFO - 2025-05-15 15:03:50 --> Output Class Initialized
INFO - 2025-05-15 15:03:50 --> Security Class Initialized
DEBUG - 2025-05-15 15:03:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:03:50 --> Input Class Initialized
INFO - 2025-05-15 15:03:50 --> Language Class Initialized
INFO - 2025-05-15 15:03:50 --> Loader Class Initialized
INFO - 2025-05-15 15:03:50 --> Helper loaded: url_helper
INFO - 2025-05-15 15:03:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:03:50 --> Helper loaded: form_helper
INFO - 2025-05-15 15:03:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:03:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:03:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:03:50 --> Form Validation Class Initialized
INFO - 2025-05-15 15:03:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:03:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:03:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:03:50 --> Controller Class Initialized
INFO - 2025-05-15 15:04:22 --> Config Class Initialized
INFO - 2025-05-15 15:04:22 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:22 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:22 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:22 --> URI Class Initialized
INFO - 2025-05-15 15:04:22 --> Router Class Initialized
INFO - 2025-05-15 15:04:22 --> Output Class Initialized
INFO - 2025-05-15 15:04:22 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:22 --> Input Class Initialized
INFO - 2025-05-15 15:04:22 --> Language Class Initialized
INFO - 2025-05-15 15:04:22 --> Loader Class Initialized
INFO - 2025-05-15 15:04:22 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:22 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:22 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:22 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:22 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:22 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:22 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:22 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:22 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:22 --> Controller Class Initialized
INFO - 2025-05-15 15:04:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:04:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:04:22 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:04:22 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:04:22 --> Final output sent to browser
DEBUG - 2025-05-15 15:04:22 --> Total execution time: 0.0106
INFO - 2025-05-15 15:04:25 --> Config Class Initialized
INFO - 2025-05-15 15:04:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:25 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:25 --> URI Class Initialized
INFO - 2025-05-15 15:04:25 --> Router Class Initialized
INFO - 2025-05-15 15:04:25 --> Output Class Initialized
INFO - 2025-05-15 15:04:25 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:25 --> Input Class Initialized
INFO - 2025-05-15 15:04:25 --> Language Class Initialized
INFO - 2025-05-15 15:04:25 --> Loader Class Initialized
INFO - 2025-05-15 15:04:25 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:25 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:25 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:25 --> Controller Class Initialized
INFO - 2025-05-15 15:04:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:04:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:04:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:04:25 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:04:25 --> Final output sent to browser
DEBUG - 2025-05-15 15:04:25 --> Total execution time: 0.0177
INFO - 2025-05-15 15:04:30 --> Config Class Initialized
INFO - 2025-05-15 15:04:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:30 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:30 --> URI Class Initialized
INFO - 2025-05-15 15:04:30 --> Router Class Initialized
INFO - 2025-05-15 15:04:30 --> Output Class Initialized
INFO - 2025-05-15 15:04:30 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:30 --> Input Class Initialized
INFO - 2025-05-15 15:04:30 --> Language Class Initialized
INFO - 2025-05-15 15:04:30 --> Loader Class Initialized
INFO - 2025-05-15 15:04:30 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:30 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:30 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:30 --> Controller Class Initialized
INFO - 2025-05-15 15:04:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:04:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:04:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:04:30 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:04:30 --> Final output sent to browser
DEBUG - 2025-05-15 15:04:30 --> Total execution time: 0.0189
INFO - 2025-05-15 15:04:34 --> Config Class Initialized
INFO - 2025-05-15 15:04:34 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:34 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:34 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:34 --> URI Class Initialized
INFO - 2025-05-15 15:04:34 --> Router Class Initialized
INFO - 2025-05-15 15:04:34 --> Output Class Initialized
INFO - 2025-05-15 15:04:34 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:34 --> Input Class Initialized
INFO - 2025-05-15 15:04:34 --> Language Class Initialized
INFO - 2025-05-15 15:04:34 --> Loader Class Initialized
INFO - 2025-05-15 15:04:34 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:34 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:34 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:34 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:34 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:34 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:34 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:34 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:34 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:34 --> Controller Class Initialized
INFO - 2025-05-15 15:04:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:04:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:04:34 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:04:34 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:04:34 --> Final output sent to browser
DEBUG - 2025-05-15 15:04:34 --> Total execution time: 0.0147
INFO - 2025-05-15 15:04:40 --> Config Class Initialized
INFO - 2025-05-15 15:04:40 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:40 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:40 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:40 --> URI Class Initialized
INFO - 2025-05-15 15:04:40 --> Router Class Initialized
INFO - 2025-05-15 15:04:40 --> Output Class Initialized
INFO - 2025-05-15 15:04:40 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:40 --> Input Class Initialized
INFO - 2025-05-15 15:04:40 --> Language Class Initialized
INFO - 2025-05-15 15:04:40 --> Loader Class Initialized
INFO - 2025-05-15 15:04:40 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:40 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:40 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:40 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:40 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:40 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:40 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:40 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:40 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:40 --> Controller Class Initialized
INFO - 2025-05-15 15:04:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:04:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:04:40 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:04:40 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:04:40 --> Final output sent to browser
DEBUG - 2025-05-15 15:04:40 --> Total execution time: 0.0240
INFO - 2025-05-15 15:04:46 --> Config Class Initialized
INFO - 2025-05-15 15:04:46 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:46 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:46 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:46 --> URI Class Initialized
INFO - 2025-05-15 15:04:46 --> Router Class Initialized
INFO - 2025-05-15 15:04:46 --> Output Class Initialized
INFO - 2025-05-15 15:04:46 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:46 --> Input Class Initialized
INFO - 2025-05-15 15:04:46 --> Language Class Initialized
INFO - 2025-05-15 15:04:46 --> Loader Class Initialized
INFO - 2025-05-15 15:04:46 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:46 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:46 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:46 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:46 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:46 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:46 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:46 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:46 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:46 --> Controller Class Initialized
INFO - 2025-05-15 15:04:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:04:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:04:46 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:04:46 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:04:46 --> Final output sent to browser
DEBUG - 2025-05-15 15:04:46 --> Total execution time: 0.0094
INFO - 2025-05-15 15:04:50 --> Config Class Initialized
INFO - 2025-05-15 15:04:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:04:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:04:50 --> Utf8 Class Initialized
INFO - 2025-05-15 15:04:50 --> URI Class Initialized
INFO - 2025-05-15 15:04:50 --> Router Class Initialized
INFO - 2025-05-15 15:04:50 --> Output Class Initialized
INFO - 2025-05-15 15:04:50 --> Security Class Initialized
DEBUG - 2025-05-15 15:04:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:04:50 --> Input Class Initialized
INFO - 2025-05-15 15:04:50 --> Language Class Initialized
INFO - 2025-05-15 15:04:50 --> Loader Class Initialized
INFO - 2025-05-15 15:04:50 --> Helper loaded: url_helper
INFO - 2025-05-15 15:04:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:04:50 --> Helper loaded: form_helper
INFO - 2025-05-15 15:04:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:04:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:04:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:04:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:04:50 --> Form Validation Class Initialized
INFO - 2025-05-15 15:04:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:04:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:04:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:04:50 --> Controller Class Initialized
DEBUG - 2025-05-15 15:04:50 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-02'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:05:30 --> Config Class Initialized
INFO - 2025-05-15 15:05:30 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:05:30 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:05:30 --> Utf8 Class Initialized
INFO - 2025-05-15 15:05:30 --> URI Class Initialized
INFO - 2025-05-15 15:05:30 --> Router Class Initialized
INFO - 2025-05-15 15:05:30 --> Output Class Initialized
INFO - 2025-05-15 15:05:30 --> Security Class Initialized
DEBUG - 2025-05-15 15:05:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:05:30 --> Input Class Initialized
INFO - 2025-05-15 15:05:30 --> Language Class Initialized
INFO - 2025-05-15 15:05:30 --> Loader Class Initialized
INFO - 2025-05-15 15:05:30 --> Helper loaded: url_helper
INFO - 2025-05-15 15:05:30 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:05:30 --> Helper loaded: form_helper
INFO - 2025-05-15 15:05:30 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:05:30 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:05:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:05:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:05:30 --> Form Validation Class Initialized
INFO - 2025-05-15 15:05:30 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:05:30 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:05:30 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:05:30 --> Controller Class Initialized
INFO - 2025-05-15 15:05:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:05:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:05:30 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:05:30 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:05:30 --> Final output sent to browser
DEBUG - 2025-05-15 15:05:30 --> Total execution time: 0.0280
INFO - 2025-05-15 15:05:35 --> Config Class Initialized
INFO - 2025-05-15 15:05:35 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:05:35 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:05:35 --> Utf8 Class Initialized
INFO - 2025-05-15 15:05:35 --> URI Class Initialized
INFO - 2025-05-15 15:05:35 --> Router Class Initialized
INFO - 2025-05-15 15:05:35 --> Output Class Initialized
INFO - 2025-05-15 15:05:35 --> Security Class Initialized
DEBUG - 2025-05-15 15:05:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:05:35 --> Input Class Initialized
INFO - 2025-05-15 15:05:35 --> Language Class Initialized
INFO - 2025-05-15 15:05:35 --> Loader Class Initialized
INFO - 2025-05-15 15:05:35 --> Helper loaded: url_helper
INFO - 2025-05-15 15:05:35 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:05:35 --> Helper loaded: form_helper
INFO - 2025-05-15 15:05:35 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:05:35 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:05:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:05:35 --> Form Validation Class Initialized
INFO - 2025-05-15 15:05:35 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:05:35 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:05:35 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:05:35 --> Controller Class Initialized
INFO - 2025-05-15 15:05:35 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:05:35 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:05:35 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 15:05:35 --> Final output sent to browser
DEBUG - 2025-05-15 15:05:35 --> Total execution time: 0.0093
INFO - 2025-05-15 15:05:38 --> Config Class Initialized
INFO - 2025-05-15 15:05:38 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:05:38 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:05:38 --> Utf8 Class Initialized
INFO - 2025-05-15 15:05:38 --> URI Class Initialized
INFO - 2025-05-15 15:05:38 --> Router Class Initialized
INFO - 2025-05-15 15:05:38 --> Output Class Initialized
INFO - 2025-05-15 15:05:38 --> Security Class Initialized
DEBUG - 2025-05-15 15:05:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:05:38 --> Input Class Initialized
INFO - 2025-05-15 15:05:38 --> Language Class Initialized
INFO - 2025-05-15 15:05:38 --> Loader Class Initialized
INFO - 2025-05-15 15:05:38 --> Helper loaded: url_helper
INFO - 2025-05-15 15:05:38 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:05:38 --> Helper loaded: form_helper
INFO - 2025-05-15 15:05:38 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:05:38 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:05:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:05:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:05:38 --> Form Validation Class Initialized
INFO - 2025-05-15 15:05:38 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:05:38 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:05:38 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:05:38 --> Controller Class Initialized
INFO - 2025-05-15 15:05:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:05:38 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:05:38 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/detail.php
INFO - 2025-05-15 15:05:38 --> Final output sent to browser
DEBUG - 2025-05-15 15:05:38 --> Total execution time: 0.0093
INFO - 2025-05-15 15:05:40 --> Config Class Initialized
INFO - 2025-05-15 15:05:40 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:05:40 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:05:40 --> Utf8 Class Initialized
INFO - 2025-05-15 15:05:40 --> URI Class Initialized
INFO - 2025-05-15 15:05:40 --> Router Class Initialized
INFO - 2025-05-15 15:05:40 --> Output Class Initialized
INFO - 2025-05-15 15:05:40 --> Security Class Initialized
DEBUG - 2025-05-15 15:05:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:05:40 --> Input Class Initialized
INFO - 2025-05-15 15:05:40 --> Language Class Initialized
INFO - 2025-05-15 15:05:40 --> Loader Class Initialized
INFO - 2025-05-15 15:05:40 --> Helper loaded: url_helper
INFO - 2025-05-15 15:05:40 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:05:40 --> Helper loaded: form_helper
INFO - 2025-05-15 15:05:40 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:05:40 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:05:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:05:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:05:40 --> Form Validation Class Initialized
INFO - 2025-05-15 15:05:40 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:05:40 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:05:40 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:05:40 --> Controller Class Initialized
DEBUG - 2025-05-15 15:05:40 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:09:09 --> Config Class Initialized
INFO - 2025-05-15 15:09:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:09:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:09:09 --> Utf8 Class Initialized
INFO - 2025-05-15 15:09:09 --> URI Class Initialized
INFO - 2025-05-15 15:09:09 --> Router Class Initialized
INFO - 2025-05-15 15:09:09 --> Output Class Initialized
INFO - 2025-05-15 15:09:09 --> Security Class Initialized
DEBUG - 2025-05-15 15:09:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:09:09 --> Input Class Initialized
INFO - 2025-05-15 15:09:09 --> Language Class Initialized
INFO - 2025-05-15 15:09:09 --> Loader Class Initialized
INFO - 2025-05-15 15:09:09 --> Helper loaded: url_helper
INFO - 2025-05-15 15:09:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:09:09 --> Helper loaded: form_helper
INFO - 2025-05-15 15:09:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:09:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:09:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:09:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:09:09 --> Form Validation Class Initialized
INFO - 2025-05-15 15:09:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:09:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:09:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:09:09 --> Controller Class Initialized
INFO - 2025-05-15 15:09:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:09:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:09:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:09:09 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:09:09 --> Final output sent to browser
DEBUG - 2025-05-15 15:09:09 --> Total execution time: 0.0141
INFO - 2025-05-15 15:09:10 --> Config Class Initialized
INFO - 2025-05-15 15:09:10 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:09:10 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:09:10 --> Utf8 Class Initialized
INFO - 2025-05-15 15:09:10 --> URI Class Initialized
INFO - 2025-05-15 15:09:10 --> Router Class Initialized
INFO - 2025-05-15 15:09:10 --> Output Class Initialized
INFO - 2025-05-15 15:09:10 --> Security Class Initialized
DEBUG - 2025-05-15 15:09:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:09:10 --> Input Class Initialized
INFO - 2025-05-15 15:09:10 --> Language Class Initialized
INFO - 2025-05-15 15:09:10 --> Loader Class Initialized
INFO - 2025-05-15 15:09:10 --> Helper loaded: url_helper
INFO - 2025-05-15 15:09:10 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:09:10 --> Helper loaded: form_helper
INFO - 2025-05-15 15:09:10 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:09:10 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:09:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:09:10 --> Form Validation Class Initialized
INFO - 2025-05-15 15:09:10 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:09:10 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:09:10 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:09:10 --> Controller Class Initialized
DEBUG - 2025-05-15 15:09:10 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:09:10 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
ERROR - 2025-05-15 15:09:10 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
ERROR - 2025-05-15 15:09:10 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
INFO - 2025-05-15 15:09:26 --> Config Class Initialized
INFO - 2025-05-15 15:09:26 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:09:26 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:09:26 --> Utf8 Class Initialized
INFO - 2025-05-15 15:09:26 --> URI Class Initialized
INFO - 2025-05-15 15:09:26 --> Router Class Initialized
INFO - 2025-05-15 15:09:26 --> Output Class Initialized
INFO - 2025-05-15 15:09:26 --> Security Class Initialized
DEBUG - 2025-05-15 15:09:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:09:26 --> Input Class Initialized
INFO - 2025-05-15 15:09:26 --> Language Class Initialized
INFO - 2025-05-15 15:09:26 --> Loader Class Initialized
INFO - 2025-05-15 15:09:26 --> Helper loaded: url_helper
INFO - 2025-05-15 15:09:26 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:09:26 --> Helper loaded: form_helper
INFO - 2025-05-15 15:09:26 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:09:26 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:09:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:09:26 --> Form Validation Class Initialized
INFO - 2025-05-15 15:09:26 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:09:26 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:09:26 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:09:26 --> Controller Class Initialized
DEBUG - 2025-05-15 15:09:26 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:09:26 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
ERROR - 2025-05-15 15:09:26 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
ERROR - 2025-05-15 15:09:26 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
INFO - 2025-05-15 15:13:18 --> Config Class Initialized
INFO - 2025-05-15 15:13:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:13:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:13:18 --> Utf8 Class Initialized
INFO - 2025-05-15 15:13:18 --> URI Class Initialized
INFO - 2025-05-15 15:13:18 --> Router Class Initialized
INFO - 2025-05-15 15:13:18 --> Output Class Initialized
INFO - 2025-05-15 15:13:18 --> Security Class Initialized
DEBUG - 2025-05-15 15:13:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:13:18 --> Input Class Initialized
INFO - 2025-05-15 15:13:18 --> Language Class Initialized
INFO - 2025-05-15 15:13:18 --> Loader Class Initialized
INFO - 2025-05-15 15:13:18 --> Helper loaded: url_helper
INFO - 2025-05-15 15:13:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:13:18 --> Helper loaded: form_helper
INFO - 2025-05-15 15:13:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:13:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:13:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:13:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:13:18 --> Form Validation Class Initialized
INFO - 2025-05-15 15:13:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:13:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:13:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:13:18 --> Controller Class Initialized
INFO - 2025-05-15 15:13:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:13:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:13:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:13:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:13:18 --> Final output sent to browser
DEBUG - 2025-05-15 15:13:18 --> Total execution time: 0.0477
INFO - 2025-05-15 15:13:19 --> Config Class Initialized
INFO - 2025-05-15 15:13:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:13:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:13:19 --> Utf8 Class Initialized
INFO - 2025-05-15 15:13:19 --> URI Class Initialized
INFO - 2025-05-15 15:13:19 --> Router Class Initialized
INFO - 2025-05-15 15:13:19 --> Output Class Initialized
INFO - 2025-05-15 15:13:19 --> Security Class Initialized
DEBUG - 2025-05-15 15:13:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:13:19 --> Input Class Initialized
INFO - 2025-05-15 15:13:19 --> Language Class Initialized
INFO - 2025-05-15 15:13:19 --> Loader Class Initialized
INFO - 2025-05-15 15:13:19 --> Helper loaded: url_helper
INFO - 2025-05-15 15:13:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:13:19 --> Helper loaded: form_helper
INFO - 2025-05-15 15:13:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:13:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:13:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:13:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:13:19 --> Form Validation Class Initialized
INFO - 2025-05-15 15:13:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:13:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:13:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:13:19 --> Controller Class Initialized
DEBUG - 2025-05-15 15:13:19 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:13:19 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 365
ERROR - 2025-05-15 15:13:19 --> Severity: error --> Exception: Cell coordinate string can not be a range of cells /var/www/html/codeigniter/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php 38
INFO - 2025-05-15 15:15:33 --> Config Class Initialized
INFO - 2025-05-15 15:15:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:15:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:15:33 --> Utf8 Class Initialized
INFO - 2025-05-15 15:15:33 --> URI Class Initialized
INFO - 2025-05-15 15:15:33 --> Router Class Initialized
INFO - 2025-05-15 15:15:33 --> Output Class Initialized
INFO - 2025-05-15 15:15:33 --> Security Class Initialized
DEBUG - 2025-05-15 15:15:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:15:33 --> Input Class Initialized
INFO - 2025-05-15 15:15:33 --> Language Class Initialized
INFO - 2025-05-15 15:15:33 --> Loader Class Initialized
INFO - 2025-05-15 15:15:33 --> Helper loaded: url_helper
INFO - 2025-05-15 15:15:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:15:33 --> Helper loaded: form_helper
INFO - 2025-05-15 15:15:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:15:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:15:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:15:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:15:33 --> Form Validation Class Initialized
INFO - 2025-05-15 15:15:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:15:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:15:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:15:33 --> Controller Class Initialized
ERROR - 2025-05-15 15:15:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 6:         b.harga,
                ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:15:33 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 6:         b.harga,
                ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
        b.harga,
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:15:33 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:17:13 --> Config Class Initialized
INFO - 2025-05-15 15:17:13 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:17:13 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:17:13 --> Utf8 Class Initialized
INFO - 2025-05-15 15:17:13 --> URI Class Initialized
INFO - 2025-05-15 15:17:13 --> Router Class Initialized
INFO - 2025-05-15 15:17:13 --> Output Class Initialized
INFO - 2025-05-15 15:17:13 --> Security Class Initialized
DEBUG - 2025-05-15 15:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:17:13 --> Input Class Initialized
INFO - 2025-05-15 15:17:13 --> Language Class Initialized
INFO - 2025-05-15 15:17:13 --> Loader Class Initialized
INFO - 2025-05-15 15:17:13 --> Helper loaded: url_helper
INFO - 2025-05-15 15:17:13 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:17:13 --> Helper loaded: form_helper
INFO - 2025-05-15 15:17:13 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:17:13 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:17:13 --> Form Validation Class Initialized
INFO - 2025-05-15 15:17:13 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:17:13 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:17:13 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:17:13 --> Controller Class Initialized
INFO - 2025-05-15 15:17:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:17:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:17:13 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:17:13 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:17:13 --> Final output sent to browser
DEBUG - 2025-05-15 15:17:13 --> Total execution time: 0.0446
INFO - 2025-05-15 15:17:15 --> Config Class Initialized
INFO - 2025-05-15 15:17:15 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:17:15 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:17:15 --> Utf8 Class Initialized
INFO - 2025-05-15 15:17:15 --> URI Class Initialized
INFO - 2025-05-15 15:17:15 --> Router Class Initialized
INFO - 2025-05-15 15:17:15 --> Output Class Initialized
INFO - 2025-05-15 15:17:15 --> Security Class Initialized
DEBUG - 2025-05-15 15:17:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:17:15 --> Input Class Initialized
INFO - 2025-05-15 15:17:15 --> Language Class Initialized
INFO - 2025-05-15 15:17:15 --> Loader Class Initialized
INFO - 2025-05-15 15:17:15 --> Helper loaded: url_helper
INFO - 2025-05-15 15:17:15 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:17:15 --> Helper loaded: form_helper
INFO - 2025-05-15 15:17:15 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:17:15 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:17:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:17:15 --> Form Validation Class Initialized
INFO - 2025-05-15 15:17:15 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:17:15 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:17:15 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:17:15 --> Controller Class Initialized
DEBUG - 2025-05-15 15:17:15 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || b.harga || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:17:15 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 365
ERROR - 2025-05-15 15:17:15 --> Severity: error --> Exception: Cell coordinate string can not be a range of cells /var/www/html/codeigniter/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php 38
INFO - 2025-05-15 15:17:19 --> Config Class Initialized
INFO - 2025-05-15 15:17:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:17:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:17:19 --> Utf8 Class Initialized
INFO - 2025-05-15 15:17:19 --> URI Class Initialized
INFO - 2025-05-15 15:17:19 --> Router Class Initialized
INFO - 2025-05-15 15:17:19 --> Output Class Initialized
INFO - 2025-05-15 15:17:19 --> Security Class Initialized
DEBUG - 2025-05-15 15:17:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:17:19 --> Input Class Initialized
INFO - 2025-05-15 15:17:19 --> Language Class Initialized
INFO - 2025-05-15 15:17:19 --> Loader Class Initialized
INFO - 2025-05-15 15:17:19 --> Helper loaded: url_helper
INFO - 2025-05-15 15:17:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:17:19 --> Helper loaded: form_helper
INFO - 2025-05-15 15:17:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:17:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:17:19 --> Form Validation Class Initialized
INFO - 2025-05-15 15:17:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:17:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:17:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:17:19 --> Controller Class Initialized
INFO - 2025-05-15 15:17:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:17:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:17:19 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:17:19 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:17:19 --> Final output sent to browser
DEBUG - 2025-05-15 15:17:19 --> Total execution time: 0.0403
INFO - 2025-05-15 15:17:20 --> Config Class Initialized
INFO - 2025-05-15 15:17:20 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:17:20 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:17:20 --> Utf8 Class Initialized
INFO - 2025-05-15 15:17:20 --> URI Class Initialized
INFO - 2025-05-15 15:17:20 --> Router Class Initialized
INFO - 2025-05-15 15:17:20 --> Output Class Initialized
INFO - 2025-05-15 15:17:20 --> Security Class Initialized
DEBUG - 2025-05-15 15:17:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:17:20 --> Input Class Initialized
INFO - 2025-05-15 15:17:20 --> Language Class Initialized
INFO - 2025-05-15 15:17:20 --> Loader Class Initialized
INFO - 2025-05-15 15:17:20 --> Helper loaded: url_helper
INFO - 2025-05-15 15:17:20 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:17:20 --> Helper loaded: form_helper
INFO - 2025-05-15 15:17:20 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:17:20 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:17:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:17:20 --> Form Validation Class Initialized
INFO - 2025-05-15 15:17:20 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:17:20 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:17:20 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:17:20 --> Controller Class Initialized
DEBUG - 2025-05-15 15:17:20 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || b.harga || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:17:20 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 365
ERROR - 2025-05-15 15:17:20 --> Severity: error --> Exception: Cell coordinate string can not be a range of cells /var/www/html/codeigniter/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php 38
INFO - 2025-05-15 15:19:43 --> Config Class Initialized
INFO - 2025-05-15 15:19:43 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:19:43 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:19:43 --> Utf8 Class Initialized
INFO - 2025-05-15 15:19:43 --> URI Class Initialized
INFO - 2025-05-15 15:19:43 --> Router Class Initialized
INFO - 2025-05-15 15:19:43 --> Output Class Initialized
INFO - 2025-05-15 15:19:43 --> Security Class Initialized
DEBUG - 2025-05-15 15:19:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:19:43 --> Input Class Initialized
INFO - 2025-05-15 15:19:43 --> Language Class Initialized
INFO - 2025-05-15 15:19:43 --> Loader Class Initialized
INFO - 2025-05-15 15:19:43 --> Helper loaded: url_helper
INFO - 2025-05-15 15:19:43 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:19:43 --> Helper loaded: form_helper
INFO - 2025-05-15 15:19:43 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:19:43 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:19:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:19:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:19:43 --> Form Validation Class Initialized
INFO - 2025-05-15 15:19:43 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:19:43 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:19:43 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:19:43 --> Controller Class Initialized
ERROR - 2025-05-15 15:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:19:43 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
             b.harga,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:19:43 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:19:44 --> Config Class Initialized
INFO - 2025-05-15 15:19:44 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:19:44 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:19:44 --> Utf8 Class Initialized
INFO - 2025-05-15 15:19:44 --> URI Class Initialized
INFO - 2025-05-15 15:19:44 --> Router Class Initialized
INFO - 2025-05-15 15:19:44 --> Output Class Initialized
INFO - 2025-05-15 15:19:44 --> Security Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:19:44 --> Input Class Initialized
INFO - 2025-05-15 15:19:44 --> Language Class Initialized
INFO - 2025-05-15 15:19:44 --> Loader Class Initialized
INFO - 2025-05-15 15:19:44 --> Helper loaded: url_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: form_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:19:44 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:19:44 --> Form Validation Class Initialized
INFO - 2025-05-15 15:19:44 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:19:44 --> Controller Class Initialized
ERROR - 2025-05-15 15:19:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:19:44 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
             b.harga,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:19:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:19:44 --> Config Class Initialized
INFO - 2025-05-15 15:19:44 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:19:44 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:19:44 --> Utf8 Class Initialized
INFO - 2025-05-15 15:19:44 --> URI Class Initialized
INFO - 2025-05-15 15:19:44 --> Router Class Initialized
INFO - 2025-05-15 15:19:44 --> Output Class Initialized
INFO - 2025-05-15 15:19:44 --> Security Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:19:44 --> Input Class Initialized
INFO - 2025-05-15 15:19:44 --> Language Class Initialized
INFO - 2025-05-15 15:19:44 --> Loader Class Initialized
INFO - 2025-05-15 15:19:44 --> Helper loaded: url_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: form_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:19:44 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:19:44 --> Form Validation Class Initialized
INFO - 2025-05-15 15:19:44 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:19:44 --> Controller Class Initialized
ERROR - 2025-05-15 15:19:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:19:44 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
             b.harga,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:19:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:19:44 --> Config Class Initialized
INFO - 2025-05-15 15:19:44 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:19:44 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:19:44 --> Utf8 Class Initialized
INFO - 2025-05-15 15:19:44 --> URI Class Initialized
INFO - 2025-05-15 15:19:44 --> Router Class Initialized
INFO - 2025-05-15 15:19:44 --> Output Class Initialized
INFO - 2025-05-15 15:19:44 --> Security Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:19:44 --> Input Class Initialized
INFO - 2025-05-15 15:19:44 --> Language Class Initialized
INFO - 2025-05-15 15:19:44 --> Loader Class Initialized
INFO - 2025-05-15 15:19:44 --> Helper loaded: url_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: form_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:19:44 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:19:44 --> Form Validation Class Initialized
INFO - 2025-05-15 15:19:44 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:19:44 --> Controller Class Initialized
ERROR - 2025-05-15 15:19:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:19:44 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
             b.harga,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:19:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:19:44 --> Config Class Initialized
INFO - 2025-05-15 15:19:44 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:19:44 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:19:44 --> Utf8 Class Initialized
INFO - 2025-05-15 15:19:44 --> URI Class Initialized
INFO - 2025-05-15 15:19:44 --> Router Class Initialized
INFO - 2025-05-15 15:19:44 --> Output Class Initialized
INFO - 2025-05-15 15:19:44 --> Security Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:19:44 --> Input Class Initialized
INFO - 2025-05-15 15:19:44 --> Language Class Initialized
INFO - 2025-05-15 15:19:44 --> Loader Class Initialized
INFO - 2025-05-15 15:19:44 --> Helper loaded: url_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: form_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:19:44 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:19:44 --> Form Validation Class Initialized
INFO - 2025-05-15 15:19:44 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:19:44 --> Controller Class Initialized
ERROR - 2025-05-15 15:19:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:19:44 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
             b.harga,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:19:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:19:44 --> Config Class Initialized
INFO - 2025-05-15 15:19:44 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:19:44 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:19:44 --> Utf8 Class Initialized
INFO - 2025-05-15 15:19:44 --> URI Class Initialized
INFO - 2025-05-15 15:19:44 --> Router Class Initialized
INFO - 2025-05-15 15:19:44 --> Output Class Initialized
INFO - 2025-05-15 15:19:44 --> Security Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:19:44 --> Input Class Initialized
INFO - 2025-05-15 15:19:44 --> Language Class Initialized
INFO - 2025-05-15 15:19:44 --> Loader Class Initialized
INFO - 2025-05-15 15:19:44 --> Helper loaded: url_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: form_helper
INFO - 2025-05-15 15:19:44 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:19:44 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:19:44 --> Form Validation Class Initialized
INFO - 2025-05-15 15:19:44 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:19:44 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:19:44 --> Controller Class Initialized
ERROR - 2025-05-15 15:19:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:19:44 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 12:              b.harga,
                      ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
             b.harga,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:19:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:25:18 --> Config Class Initialized
INFO - 2025-05-15 15:25:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:25:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:25:18 --> Utf8 Class Initialized
INFO - 2025-05-15 15:25:18 --> URI Class Initialized
INFO - 2025-05-15 15:25:18 --> Router Class Initialized
INFO - 2025-05-15 15:25:18 --> Output Class Initialized
INFO - 2025-05-15 15:25:18 --> Security Class Initialized
DEBUG - 2025-05-15 15:25:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:25:18 --> Input Class Initialized
INFO - 2025-05-15 15:25:18 --> Language Class Initialized
INFO - 2025-05-15 15:25:18 --> Loader Class Initialized
INFO - 2025-05-15 15:25:18 --> Helper loaded: url_helper
INFO - 2025-05-15 15:25:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:25:18 --> Helper loaded: form_helper
INFO - 2025-05-15 15:25:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:25:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:25:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:25:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:25:18 --> Form Validation Class Initialized
INFO - 2025-05-15 15:25:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:25:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:25:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:25:18 --> Controller Class Initialized
DEBUG - 2025-05-15 15:25:18 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon,
             MIN(b.harga) AS harga
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:25:18 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 365
ERROR - 2025-05-15 15:25:18 --> Severity: error --> Exception: Cell coordinate string can not be a range of cells /var/www/html/codeigniter/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php 38
INFO - 2025-05-15 15:28:31 --> Config Class Initialized
INFO - 2025-05-15 15:28:31 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:28:31 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:28:31 --> Utf8 Class Initialized
INFO - 2025-05-15 15:28:31 --> URI Class Initialized
INFO - 2025-05-15 15:28:31 --> Router Class Initialized
INFO - 2025-05-15 15:28:31 --> Output Class Initialized
INFO - 2025-05-15 15:28:31 --> Security Class Initialized
DEBUG - 2025-05-15 15:28:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:28:31 --> Input Class Initialized
INFO - 2025-05-15 15:28:31 --> Language Class Initialized
INFO - 2025-05-15 15:28:31 --> Loader Class Initialized
INFO - 2025-05-15 15:28:31 --> Helper loaded: url_helper
INFO - 2025-05-15 15:28:31 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:28:31 --> Helper loaded: form_helper
INFO - 2025-05-15 15:28:31 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:28:31 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:28:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:28:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:28:31 --> Form Validation Class Initialized
INFO - 2025-05-15 15:28:31 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:28:31 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:28:31 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:28:31 --> Controller Class Initialized
DEBUG - 2025-05-15 15:28:31 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon,
             MIN(b.harga) AS harga
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:28:32 --> Config Class Initialized
INFO - 2025-05-15 15:28:32 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:28:32 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:28:32 --> Utf8 Class Initialized
INFO - 2025-05-15 15:28:32 --> URI Class Initialized
INFO - 2025-05-15 15:28:32 --> Router Class Initialized
INFO - 2025-05-15 15:28:32 --> Output Class Initialized
INFO - 2025-05-15 15:28:32 --> Security Class Initialized
DEBUG - 2025-05-15 15:28:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:28:32 --> Input Class Initialized
INFO - 2025-05-15 15:28:32 --> Language Class Initialized
INFO - 2025-05-15 15:28:32 --> Loader Class Initialized
INFO - 2025-05-15 15:28:32 --> Helper loaded: url_helper
INFO - 2025-05-15 15:28:32 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:28:32 --> Helper loaded: form_helper
INFO - 2025-05-15 15:28:32 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:28:32 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:28:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:28:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:28:32 --> Form Validation Class Initialized
INFO - 2025-05-15 15:28:32 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:28:32 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:28:32 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:28:32 --> Controller Class Initialized
INFO - 2025-05-15 15:28:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:28:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:28:32 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:28:32 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:28:32 --> Final output sent to browser
DEBUG - 2025-05-15 15:28:32 --> Total execution time: 0.0160
INFO - 2025-05-15 15:28:33 --> Config Class Initialized
INFO - 2025-05-15 15:28:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:28:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:28:33 --> Utf8 Class Initialized
INFO - 2025-05-15 15:28:33 --> URI Class Initialized
INFO - 2025-05-15 15:28:33 --> Router Class Initialized
INFO - 2025-05-15 15:28:33 --> Output Class Initialized
INFO - 2025-05-15 15:28:33 --> Security Class Initialized
DEBUG - 2025-05-15 15:28:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:28:33 --> Input Class Initialized
INFO - 2025-05-15 15:28:33 --> Language Class Initialized
INFO - 2025-05-15 15:28:33 --> Loader Class Initialized
INFO - 2025-05-15 15:28:33 --> Helper loaded: url_helper
INFO - 2025-05-15 15:28:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:28:33 --> Helper loaded: form_helper
INFO - 2025-05-15 15:28:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:28:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:28:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:28:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:28:33 --> Form Validation Class Initialized
INFO - 2025-05-15 15:28:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:28:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:28:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:28:33 --> Controller Class Initialized
INFO - 2025-05-15 15:28:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:28:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:28:33 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:28:33 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:28:33 --> Final output sent to browser
DEBUG - 2025-05-15 15:28:33 --> Total execution time: 0.0279
INFO - 2025-05-15 15:31:25 --> Config Class Initialized
INFO - 2025-05-15 15:31:25 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:31:25 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:31:25 --> Utf8 Class Initialized
INFO - 2025-05-15 15:31:25 --> URI Class Initialized
INFO - 2025-05-15 15:31:25 --> Router Class Initialized
INFO - 2025-05-15 15:31:25 --> Output Class Initialized
INFO - 2025-05-15 15:31:25 --> Security Class Initialized
DEBUG - 2025-05-15 15:31:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:31:25 --> Input Class Initialized
INFO - 2025-05-15 15:31:25 --> Language Class Initialized
INFO - 2025-05-15 15:31:25 --> Loader Class Initialized
INFO - 2025-05-15 15:31:25 --> Helper loaded: url_helper
INFO - 2025-05-15 15:31:25 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:31:25 --> Helper loaded: form_helper
INFO - 2025-05-15 15:31:25 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:31:25 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:31:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:31:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:31:25 --> Form Validation Class Initialized
INFO - 2025-05-15 15:31:25 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:31:25 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:31:25 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:31:25 --> Controller Class Initialized
INFO - 2025-05-15 15:31:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:31:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:31:25 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:31:25 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:31:25 --> Final output sent to browser
DEBUG - 2025-05-15 15:31:25 --> Total execution time: 0.0327
INFO - 2025-05-15 15:31:27 --> Config Class Initialized
INFO - 2025-05-15 15:31:27 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:31:27 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:31:27 --> Utf8 Class Initialized
INFO - 2025-05-15 15:31:27 --> URI Class Initialized
INFO - 2025-05-15 15:31:27 --> Router Class Initialized
INFO - 2025-05-15 15:31:27 --> Output Class Initialized
INFO - 2025-05-15 15:31:27 --> Security Class Initialized
DEBUG - 2025-05-15 15:31:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:31:27 --> Input Class Initialized
INFO - 2025-05-15 15:31:27 --> Language Class Initialized
INFO - 2025-05-15 15:31:27 --> Loader Class Initialized
INFO - 2025-05-15 15:31:27 --> Helper loaded: url_helper
INFO - 2025-05-15 15:31:27 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:31:27 --> Helper loaded: form_helper
INFO - 2025-05-15 15:31:27 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:31:27 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:31:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:31:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:31:27 --> Form Validation Class Initialized
INFO - 2025-05-15 15:31:27 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:31:27 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:31:27 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:31:27 --> Controller Class Initialized
DEBUG - 2025-05-15 15:31:27 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
                b.nama || ' (' || dt.jumlah || ' x ' || 
                (dt.total / NULLIF(dt.jumlah, 0)) || ')', 
                ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon,
             MIN(b.harga) AS harga
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:36:27 --> Config Class Initialized
INFO - 2025-05-15 15:36:27 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:36:27 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:36:27 --> Utf8 Class Initialized
INFO - 2025-05-15 15:36:27 --> URI Class Initialized
INFO - 2025-05-15 15:36:27 --> Router Class Initialized
INFO - 2025-05-15 15:36:27 --> Output Class Initialized
INFO - 2025-05-15 15:36:27 --> Security Class Initialized
DEBUG - 2025-05-15 15:36:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:36:27 --> Input Class Initialized
INFO - 2025-05-15 15:36:27 --> Language Class Initialized
INFO - 2025-05-15 15:36:27 --> Loader Class Initialized
INFO - 2025-05-15 15:36:27 --> Helper loaded: url_helper
INFO - 2025-05-15 15:36:27 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:36:27 --> Helper loaded: form_helper
INFO - 2025-05-15 15:36:27 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:36:27 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:36:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:36:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:36:27 --> Form Validation Class Initialized
INFO - 2025-05-15 15:36:27 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:36:27 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:36:27 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:36:27 --> Controller Class Initialized
INFO - 2025-05-15 15:36:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:36:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:36:27 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:36:27 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:36:27 --> Final output sent to browser
DEBUG - 2025-05-15 15:36:27 --> Total execution time: 0.0362
INFO - 2025-05-15 15:36:28 --> Config Class Initialized
INFO - 2025-05-15 15:36:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:36:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:36:28 --> Utf8 Class Initialized
INFO - 2025-05-15 15:36:28 --> URI Class Initialized
INFO - 2025-05-15 15:36:28 --> Router Class Initialized
INFO - 2025-05-15 15:36:28 --> Output Class Initialized
INFO - 2025-05-15 15:36:28 --> Security Class Initialized
DEBUG - 2025-05-15 15:36:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:36:28 --> Input Class Initialized
INFO - 2025-05-15 15:36:28 --> Language Class Initialized
INFO - 2025-05-15 15:36:28 --> Loader Class Initialized
INFO - 2025-05-15 15:36:28 --> Helper loaded: url_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: form_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:36:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:36:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:36:28 --> Form Validation Class Initialized
INFO - 2025-05-15 15:36:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:36:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:36:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:36:28 --> Controller Class Initialized
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:36:28 --> Final output sent to browser
DEBUG - 2025-05-15 15:36:28 --> Total execution time: 0.0405
INFO - 2025-05-15 15:36:28 --> Config Class Initialized
INFO - 2025-05-15 15:36:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:36:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:36:28 --> Utf8 Class Initialized
INFO - 2025-05-15 15:36:28 --> URI Class Initialized
INFO - 2025-05-15 15:36:28 --> Router Class Initialized
INFO - 2025-05-15 15:36:28 --> Output Class Initialized
INFO - 2025-05-15 15:36:28 --> Security Class Initialized
DEBUG - 2025-05-15 15:36:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:36:28 --> Input Class Initialized
INFO - 2025-05-15 15:36:28 --> Language Class Initialized
INFO - 2025-05-15 15:36:28 --> Loader Class Initialized
INFO - 2025-05-15 15:36:28 --> Helper loaded: url_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: form_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:36:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:36:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:36:28 --> Form Validation Class Initialized
INFO - 2025-05-15 15:36:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:36:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:36:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:36:28 --> Controller Class Initialized
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:36:28 --> Final output sent to browser
DEBUG - 2025-05-15 15:36:28 --> Total execution time: 0.0098
INFO - 2025-05-15 15:36:28 --> Config Class Initialized
INFO - 2025-05-15 15:36:28 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:36:28 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:36:28 --> Utf8 Class Initialized
INFO - 2025-05-15 15:36:28 --> URI Class Initialized
INFO - 2025-05-15 15:36:28 --> Router Class Initialized
INFO - 2025-05-15 15:36:28 --> Output Class Initialized
INFO - 2025-05-15 15:36:28 --> Security Class Initialized
DEBUG - 2025-05-15 15:36:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:36:28 --> Input Class Initialized
INFO - 2025-05-15 15:36:28 --> Language Class Initialized
INFO - 2025-05-15 15:36:28 --> Loader Class Initialized
INFO - 2025-05-15 15:36:28 --> Helper loaded: url_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: form_helper
INFO - 2025-05-15 15:36:28 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:36:28 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:36:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:36:28 --> Form Validation Class Initialized
INFO - 2025-05-15 15:36:28 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:36:28 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:36:28 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:36:28 --> Controller Class Initialized
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:36:28 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:36:28 --> Final output sent to browser
DEBUG - 2025-05-15 15:36:28 --> Total execution time: 0.0233
INFO - 2025-05-15 15:36:29 --> Config Class Initialized
INFO - 2025-05-15 15:36:29 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:36:29 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:36:29 --> Utf8 Class Initialized
INFO - 2025-05-15 15:36:29 --> URI Class Initialized
INFO - 2025-05-15 15:36:29 --> Router Class Initialized
INFO - 2025-05-15 15:36:29 --> Output Class Initialized
INFO - 2025-05-15 15:36:29 --> Security Class Initialized
DEBUG - 2025-05-15 15:36:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:36:29 --> Input Class Initialized
INFO - 2025-05-15 15:36:29 --> Language Class Initialized
INFO - 2025-05-15 15:36:29 --> Loader Class Initialized
INFO - 2025-05-15 15:36:29 --> Helper loaded: url_helper
INFO - 2025-05-15 15:36:29 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:36:29 --> Helper loaded: form_helper
INFO - 2025-05-15 15:36:29 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:36:29 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:36:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:36:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:36:29 --> Form Validation Class Initialized
INFO - 2025-05-15 15:36:29 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:36:29 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:36:29 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:36:29 --> Controller Class Initialized
DEBUG - 2025-05-15 15:36:29 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon,
             MIN(b.harga) AS harga
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:37:06 --> Config Class Initialized
INFO - 2025-05-15 15:37:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:37:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:37:06 --> Utf8 Class Initialized
INFO - 2025-05-15 15:37:06 --> URI Class Initialized
INFO - 2025-05-15 15:37:06 --> Router Class Initialized
INFO - 2025-05-15 15:37:06 --> Output Class Initialized
INFO - 2025-05-15 15:37:06 --> Security Class Initialized
DEBUG - 2025-05-15 15:37:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:37:06 --> Input Class Initialized
INFO - 2025-05-15 15:37:06 --> Language Class Initialized
INFO - 2025-05-15 15:37:06 --> Loader Class Initialized
INFO - 2025-05-15 15:37:06 --> Helper loaded: url_helper
INFO - 2025-05-15 15:37:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:37:06 --> Helper loaded: form_helper
INFO - 2025-05-15 15:37:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:37:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:37:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:37:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:37:06 --> Form Validation Class Initialized
INFO - 2025-05-15 15:37:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:37:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:37:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:37:06 --> Controller Class Initialized
INFO - 2025-05-15 15:37:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:37:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:37:06 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:37:06 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:37:06 --> Final output sent to browser
DEBUG - 2025-05-15 15:37:06 --> Total execution time: 0.0177
INFO - 2025-05-15 15:37:07 --> Config Class Initialized
INFO - 2025-05-15 15:37:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:37:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:37:07 --> Utf8 Class Initialized
INFO - 2025-05-15 15:37:07 --> URI Class Initialized
INFO - 2025-05-15 15:37:07 --> Router Class Initialized
INFO - 2025-05-15 15:37:07 --> Output Class Initialized
INFO - 2025-05-15 15:37:07 --> Security Class Initialized
DEBUG - 2025-05-15 15:37:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:37:07 --> Input Class Initialized
INFO - 2025-05-15 15:37:07 --> Language Class Initialized
INFO - 2025-05-15 15:37:07 --> Loader Class Initialized
INFO - 2025-05-15 15:37:07 --> Helper loaded: url_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: form_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:37:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:37:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:37:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:37:07 --> Form Validation Class Initialized
INFO - 2025-05-15 15:37:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:37:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:37:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:37:07 --> Controller Class Initialized
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:37:07 --> Final output sent to browser
DEBUG - 2025-05-15 15:37:07 --> Total execution time: 0.0407
INFO - 2025-05-15 15:37:07 --> Config Class Initialized
INFO - 2025-05-15 15:37:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:37:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:37:07 --> Utf8 Class Initialized
INFO - 2025-05-15 15:37:07 --> URI Class Initialized
INFO - 2025-05-15 15:37:07 --> Router Class Initialized
INFO - 2025-05-15 15:37:07 --> Output Class Initialized
INFO - 2025-05-15 15:37:07 --> Security Class Initialized
DEBUG - 2025-05-15 15:37:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:37:07 --> Input Class Initialized
INFO - 2025-05-15 15:37:07 --> Language Class Initialized
INFO - 2025-05-15 15:37:07 --> Loader Class Initialized
INFO - 2025-05-15 15:37:07 --> Helper loaded: url_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: form_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:37:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:37:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:37:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:37:07 --> Form Validation Class Initialized
INFO - 2025-05-15 15:37:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:37:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:37:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:37:07 --> Controller Class Initialized
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:37:07 --> Final output sent to browser
DEBUG - 2025-05-15 15:37:07 --> Total execution time: 0.0406
INFO - 2025-05-15 15:37:07 --> Config Class Initialized
INFO - 2025-05-15 15:37:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:37:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:37:07 --> Utf8 Class Initialized
INFO - 2025-05-15 15:37:07 --> URI Class Initialized
INFO - 2025-05-15 15:37:07 --> Router Class Initialized
INFO - 2025-05-15 15:37:07 --> Output Class Initialized
INFO - 2025-05-15 15:37:07 --> Security Class Initialized
DEBUG - 2025-05-15 15:37:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:37:07 --> Input Class Initialized
INFO - 2025-05-15 15:37:07 --> Language Class Initialized
INFO - 2025-05-15 15:37:07 --> Loader Class Initialized
INFO - 2025-05-15 15:37:07 --> Helper loaded: url_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: form_helper
INFO - 2025-05-15 15:37:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:37:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:37:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:37:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:37:07 --> Form Validation Class Initialized
INFO - 2025-05-15 15:37:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:37:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:37:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:37:07 --> Controller Class Initialized
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:37:07 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:37:07 --> Final output sent to browser
DEBUG - 2025-05-15 15:37:07 --> Total execution time: 0.0180
INFO - 2025-05-15 15:37:08 --> Config Class Initialized
INFO - 2025-05-15 15:37:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:37:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:37:08 --> Utf8 Class Initialized
INFO - 2025-05-15 15:37:08 --> URI Class Initialized
INFO - 2025-05-15 15:37:08 --> Router Class Initialized
INFO - 2025-05-15 15:37:08 --> Output Class Initialized
INFO - 2025-05-15 15:37:08 --> Security Class Initialized
DEBUG - 2025-05-15 15:37:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:37:08 --> Input Class Initialized
INFO - 2025-05-15 15:37:08 --> Language Class Initialized
INFO - 2025-05-15 15:37:08 --> Loader Class Initialized
INFO - 2025-05-15 15:37:08 --> Helper loaded: url_helper
INFO - 2025-05-15 15:37:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:37:08 --> Helper loaded: form_helper
INFO - 2025-05-15 15:37:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:37:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:37:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:37:08 --> Form Validation Class Initialized
INFO - 2025-05-15 15:37:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:37:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:37:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:37:08 --> Controller Class Initialized
DEBUG - 2025-05-15 15:37:08 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon,
             MIN(b.harga) AS harga
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
ERROR - 2025-05-15 15:37:08 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
ERROR - 2025-05-15 15:37:08 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
ERROR - 2025-05-15 15:37:08 --> Severity: Notice --> Undefined property: stdClass::$harga /var/www/html/codeigniter/application/controllers/Transaksi.php 371
INFO - 2025-05-15 15:41:05 --> Config Class Initialized
INFO - 2025-05-15 15:41:05 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:41:05 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:41:05 --> Utf8 Class Initialized
INFO - 2025-05-15 15:41:05 --> URI Class Initialized
INFO - 2025-05-15 15:41:05 --> Router Class Initialized
INFO - 2025-05-15 15:41:05 --> Output Class Initialized
INFO - 2025-05-15 15:41:05 --> Security Class Initialized
DEBUG - 2025-05-15 15:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:41:05 --> Input Class Initialized
INFO - 2025-05-15 15:41:05 --> Language Class Initialized
INFO - 2025-05-15 15:41:05 --> Loader Class Initialized
INFO - 2025-05-15 15:41:05 --> Helper loaded: url_helper
INFO - 2025-05-15 15:41:05 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:41:05 --> Helper loaded: form_helper
INFO - 2025-05-15 15:41:05 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:41:05 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:41:05 --> Form Validation Class Initialized
INFO - 2025-05-15 15:41:05 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:41:05 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:41:05 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:41:05 --> Controller Class Initialized
INFO - 2025-05-15 15:41:05 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:41:05 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:41:05 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:41:05 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:41:05 --> Final output sent to browser
DEBUG - 2025-05-15 15:41:05 --> Total execution time: 0.0302
INFO - 2025-05-15 15:41:06 --> Config Class Initialized
INFO - 2025-05-15 15:41:06 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:41:06 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:41:06 --> Utf8 Class Initialized
INFO - 2025-05-15 15:41:06 --> URI Class Initialized
INFO - 2025-05-15 15:41:06 --> Router Class Initialized
INFO - 2025-05-15 15:41:06 --> Output Class Initialized
INFO - 2025-05-15 15:41:06 --> Security Class Initialized
DEBUG - 2025-05-15 15:41:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:41:06 --> Input Class Initialized
INFO - 2025-05-15 15:41:06 --> Language Class Initialized
INFO - 2025-05-15 15:41:06 --> Loader Class Initialized
INFO - 2025-05-15 15:41:06 --> Helper loaded: url_helper
INFO - 2025-05-15 15:41:06 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:41:06 --> Helper loaded: form_helper
INFO - 2025-05-15 15:41:06 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:41:06 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:41:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:41:06 --> Form Validation Class Initialized
INFO - 2025-05-15 15:41:06 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:41:06 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:41:06 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:41:06 --> Controller Class Initialized
DEBUG - 2025-05-15 15:41:06 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:42:09 --> Config Class Initialized
INFO - 2025-05-15 15:42:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:42:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:42:09 --> Utf8 Class Initialized
INFO - 2025-05-15 15:42:09 --> URI Class Initialized
INFO - 2025-05-15 15:42:09 --> Router Class Initialized
INFO - 2025-05-15 15:42:09 --> Output Class Initialized
INFO - 2025-05-15 15:42:09 --> Security Class Initialized
DEBUG - 2025-05-15 15:42:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:42:09 --> Input Class Initialized
INFO - 2025-05-15 15:42:09 --> Language Class Initialized
INFO - 2025-05-15 15:42:09 --> Loader Class Initialized
INFO - 2025-05-15 15:42:09 --> Helper loaded: url_helper
INFO - 2025-05-15 15:42:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:42:09 --> Helper loaded: form_helper
INFO - 2025-05-15 15:42:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:42:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:42:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:42:09 --> Form Validation Class Initialized
INFO - 2025-05-15 15:42:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:42:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:42:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:42:09 --> Controller Class Initialized
INFO - 2025-05-15 15:42:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:42:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:42:09 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:42:09 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:42:09 --> Final output sent to browser
DEBUG - 2025-05-15 15:42:09 --> Total execution time: 0.0322
INFO - 2025-05-15 15:42:09 --> Config Class Initialized
INFO - 2025-05-15 15:42:09 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:42:09 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:42:09 --> Utf8 Class Initialized
INFO - 2025-05-15 15:42:09 --> URI Class Initialized
INFO - 2025-05-15 15:42:09 --> Router Class Initialized
INFO - 2025-05-15 15:42:09 --> Output Class Initialized
INFO - 2025-05-15 15:42:09 --> Security Class Initialized
DEBUG - 2025-05-15 15:42:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:42:09 --> Input Class Initialized
INFO - 2025-05-15 15:42:09 --> Language Class Initialized
INFO - 2025-05-15 15:42:09 --> Loader Class Initialized
INFO - 2025-05-15 15:42:09 --> Helper loaded: url_helper
INFO - 2025-05-15 15:42:09 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:42:09 --> Helper loaded: form_helper
INFO - 2025-05-15 15:42:09 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:42:09 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:42:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:42:09 --> Form Validation Class Initialized
INFO - 2025-05-15 15:42:09 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:42:09 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:42:09 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:42:09 --> Controller Class Initialized
DEBUG - 2025-05-15 15:42:09 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:43:03 --> Config Class Initialized
INFO - 2025-05-15 15:43:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:43:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:43:03 --> Utf8 Class Initialized
INFO - 2025-05-15 15:43:03 --> URI Class Initialized
INFO - 2025-05-15 15:43:03 --> Router Class Initialized
INFO - 2025-05-15 15:43:03 --> Output Class Initialized
INFO - 2025-05-15 15:43:03 --> Security Class Initialized
DEBUG - 2025-05-15 15:43:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:43:03 --> Input Class Initialized
INFO - 2025-05-15 15:43:03 --> Language Class Initialized
INFO - 2025-05-15 15:43:03 --> Loader Class Initialized
INFO - 2025-05-15 15:43:03 --> Helper loaded: url_helper
INFO - 2025-05-15 15:43:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:43:03 --> Helper loaded: form_helper
INFO - 2025-05-15 15:43:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:43:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:43:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:43:03 --> Form Validation Class Initialized
INFO - 2025-05-15 15:43:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:43:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:43:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:43:03 --> Controller Class Initialized
ERROR - 2025-05-15 15:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;b&quot;
LINE 1: SELECT &quot;t&quot;.*, &quot;p&quot;.&quot;nama&quot; AS &quot;nama_pembeli&quot;, &quot;b&quot;.&quot;harga&quot;, &quot;dt...
                                                    ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:43:03 --> Query error: ERROR:  missing FROM-clause entry for table "b"
LINE 1: SELECT "t".*, "p"."nama" AS "nama_pembeli", "b"."harga", "dt...
                                                    ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "b"."harga", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:43:03 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:43:42 --> Config Class Initialized
INFO - 2025-05-15 15:43:42 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:43:42 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:43:42 --> Utf8 Class Initialized
INFO - 2025-05-15 15:43:42 --> URI Class Initialized
INFO - 2025-05-15 15:43:42 --> Router Class Initialized
INFO - 2025-05-15 15:43:42 --> Output Class Initialized
INFO - 2025-05-15 15:43:42 --> Security Class Initialized
DEBUG - 2025-05-15 15:43:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:43:42 --> Input Class Initialized
INFO - 2025-05-15 15:43:42 --> Language Class Initialized
INFO - 2025-05-15 15:43:42 --> Loader Class Initialized
INFO - 2025-05-15 15:43:42 --> Helper loaded: url_helper
INFO - 2025-05-15 15:43:42 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:43:42 --> Helper loaded: form_helper
INFO - 2025-05-15 15:43:42 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:43:42 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:43:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:43:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:43:42 --> Form Validation Class Initialized
INFO - 2025-05-15 15:43:42 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:43:42 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:43:42 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:43:42 --> Controller Class Initialized
DEBUG - 2025-05-15 15:43:42 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:44:03 --> Config Class Initialized
INFO - 2025-05-15 15:44:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:44:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:44:03 --> Utf8 Class Initialized
INFO - 2025-05-15 15:44:03 --> URI Class Initialized
INFO - 2025-05-15 15:44:03 --> Router Class Initialized
INFO - 2025-05-15 15:44:03 --> Output Class Initialized
INFO - 2025-05-15 15:44:03 --> Security Class Initialized
DEBUG - 2025-05-15 15:44:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:44:03 --> Input Class Initialized
INFO - 2025-05-15 15:44:03 --> Language Class Initialized
INFO - 2025-05-15 15:44:03 --> Loader Class Initialized
INFO - 2025-05-15 15:44:03 --> Helper loaded: url_helper
INFO - 2025-05-15 15:44:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:44:03 --> Helper loaded: form_helper
INFO - 2025-05-15 15:44:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:44:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:44:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:44:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:44:03 --> Form Validation Class Initialized
INFO - 2025-05-15 15:44:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:44:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:44:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:44:03 --> Controller Class Initialized
ERROR - 2025-05-15 15:44:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;b.harga&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:             b.harga,
                    ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:44:03 --> Query error: ERROR:  column "b.harga" must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:             b.harga,
                    ^ - Invalid query: SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            b.harga,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:44:03 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:44:07 --> Config Class Initialized
INFO - 2025-05-15 15:44:07 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:44:07 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:44:07 --> Utf8 Class Initialized
INFO - 2025-05-15 15:44:07 --> URI Class Initialized
INFO - 2025-05-15 15:44:07 --> Router Class Initialized
INFO - 2025-05-15 15:44:07 --> Output Class Initialized
INFO - 2025-05-15 15:44:07 --> Security Class Initialized
DEBUG - 2025-05-15 15:44:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:44:07 --> Input Class Initialized
INFO - 2025-05-15 15:44:07 --> Language Class Initialized
INFO - 2025-05-15 15:44:07 --> Loader Class Initialized
INFO - 2025-05-15 15:44:07 --> Helper loaded: url_helper
INFO - 2025-05-15 15:44:07 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:44:07 --> Helper loaded: form_helper
INFO - 2025-05-15 15:44:07 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:44:07 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:44:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:44:07 --> Form Validation Class Initialized
INFO - 2025-05-15 15:44:07 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:44:07 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:44:07 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:44:07 --> Controller Class Initialized
DEBUG - 2025-05-15 15:44:07 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:51:33 --> Config Class Initialized
INFO - 2025-05-15 15:51:33 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:51:33 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:51:33 --> Utf8 Class Initialized
INFO - 2025-05-15 15:51:33 --> URI Class Initialized
INFO - 2025-05-15 15:51:33 --> Router Class Initialized
INFO - 2025-05-15 15:51:33 --> Output Class Initialized
INFO - 2025-05-15 15:51:33 --> Security Class Initialized
DEBUG - 2025-05-15 15:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:51:33 --> Input Class Initialized
INFO - 2025-05-15 15:51:33 --> Language Class Initialized
INFO - 2025-05-15 15:51:33 --> Loader Class Initialized
INFO - 2025-05-15 15:51:33 --> Helper loaded: url_helper
INFO - 2025-05-15 15:51:33 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:51:33 --> Helper loaded: form_helper
INFO - 2025-05-15 15:51:33 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:51:33 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:51:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:51:33 --> Form Validation Class Initialized
INFO - 2025-05-15 15:51:33 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:51:33 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:51:33 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:51:33 --> Controller Class Initialized
ERROR - 2025-05-15 15:51:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;.&quot;
LINE 1: ...ga&quot;, &quot;-- harga satuan asli dari tabel barang&quot; &quot;dt&quot;.&quot;disc_per...
                                                             ^ /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:51:33 --> Query error: ERROR:  syntax error at or near "."
LINE 1: ...ga", "-- harga satuan asli dari tabel barang" "dt"."disc_per...
                                                             ^ - Invalid query: SELECT "t"."id_transaksi", "p"."nama" AS "nama_pembeli", "b"."nama" AS "nama_barang", "dt"."jumlah", "b"."harga", "-- harga satuan asli dari tabel barang" "dt"."disc_persen", "dt"."disc_rp", "dt"."subtotal"
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN "detail_transaksi" "dt" ON "dt"."transaksi_id" = "t"."id_transaksi"
JOIN "barang" "b" ON "b"."id" = "dt"."barang_id"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:51:33 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:51:53 --> Config Class Initialized
INFO - 2025-05-15 15:51:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:51:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:51:53 --> Utf8 Class Initialized
INFO - 2025-05-15 15:51:53 --> URI Class Initialized
INFO - 2025-05-15 15:51:53 --> Router Class Initialized
INFO - 2025-05-15 15:51:53 --> Output Class Initialized
INFO - 2025-05-15 15:51:53 --> Security Class Initialized
DEBUG - 2025-05-15 15:51:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:51:53 --> Input Class Initialized
INFO - 2025-05-15 15:51:53 --> Language Class Initialized
INFO - 2025-05-15 15:51:53 --> Loader Class Initialized
INFO - 2025-05-15 15:51:53 --> Helper loaded: url_helper
INFO - 2025-05-15 15:51:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:51:53 --> Helper loaded: form_helper
INFO - 2025-05-15 15:51:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:51:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:51:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:51:53 --> Form Validation Class Initialized
INFO - 2025-05-15 15:51:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:51:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:51:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:51:53 --> Controller Class Initialized
ERROR - 2025-05-15 15:51:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dt.subtotal does not exist
LINE 1: ... &quot;b&quot;.&quot;harga&quot;, &quot;dt&quot;.&quot;disc_persen&quot;, &quot;dt&quot;.&quot;disc_rp&quot;, &quot;dt&quot;.&quot;subt...
                                                             ^
HINT:  Perhaps you meant to reference the column &quot;dt.total&quot;. /var/www/html/codeigniter/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2025-05-15 15:51:53 --> Query error: ERROR:  column dt.subtotal does not exist
LINE 1: ... "b"."harga", "dt"."disc_persen", "dt"."disc_rp", "dt"."subt...
                                                             ^
HINT:  Perhaps you meant to reference the column "dt.total". - Invalid query: SELECT "t"."id_transaksi", "p"."nama" AS "nama_pembeli", "b"."nama" AS "nama_barang", "dt"."jumlah", "b"."harga", "dt"."disc_persen", "dt"."disc_rp", "dt"."subtotal"
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN "detail_transaksi" "dt" ON "dt"."transaksi_id" = "t"."id_transaksi"
JOIN "barang" "b" ON "b"."id" = "dt"."barang_id"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:51:53 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-15 15:52:51 --> Config Class Initialized
INFO - 2025-05-15 15:52:51 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:52:51 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:52:51 --> Utf8 Class Initialized
INFO - 2025-05-15 15:52:51 --> URI Class Initialized
INFO - 2025-05-15 15:52:51 --> Router Class Initialized
INFO - 2025-05-15 15:52:51 --> Output Class Initialized
INFO - 2025-05-15 15:52:51 --> Security Class Initialized
DEBUG - 2025-05-15 15:52:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:52:51 --> Input Class Initialized
INFO - 2025-05-15 15:52:51 --> Language Class Initialized
INFO - 2025-05-15 15:52:51 --> Loader Class Initialized
INFO - 2025-05-15 15:52:51 --> Helper loaded: url_helper
INFO - 2025-05-15 15:52:51 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:52:51 --> Helper loaded: form_helper
INFO - 2025-05-15 15:52:51 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:52:51 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:52:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:52:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:52:51 --> Form Validation Class Initialized
INFO - 2025-05-15 15:52:51 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:52:51 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:52:51 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:52:51 --> Controller Class Initialized
DEBUG - 2025-05-15 15:52:51 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:54:17 --> Config Class Initialized
INFO - 2025-05-15 15:54:17 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:54:17 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:54:17 --> Utf8 Class Initialized
INFO - 2025-05-15 15:54:17 --> URI Class Initialized
INFO - 2025-05-15 15:54:17 --> Router Class Initialized
INFO - 2025-05-15 15:54:17 --> Output Class Initialized
INFO - 2025-05-15 15:54:17 --> Security Class Initialized
DEBUG - 2025-05-15 15:54:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:54:17 --> Input Class Initialized
INFO - 2025-05-15 15:54:17 --> Language Class Initialized
INFO - 2025-05-15 15:54:17 --> Loader Class Initialized
INFO - 2025-05-15 15:54:17 --> Helper loaded: url_helper
INFO - 2025-05-15 15:54:17 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:54:17 --> Helper loaded: form_helper
INFO - 2025-05-15 15:54:17 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:54:17 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:54:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:54:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:54:17 --> Form Validation Class Initialized
INFO - 2025-05-15 15:54:17 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:54:17 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:54:17 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:54:17 --> Controller Class Initialized
INFO - 2025-05-15 15:54:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:54:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:54:17 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:54:17 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:54:17 --> Final output sent to browser
DEBUG - 2025-05-15 15:54:17 --> Total execution time: 0.0187
INFO - 2025-05-15 15:54:18 --> Config Class Initialized
INFO - 2025-05-15 15:54:18 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:54:18 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:54:18 --> Utf8 Class Initialized
INFO - 2025-05-15 15:54:18 --> URI Class Initialized
INFO - 2025-05-15 15:54:18 --> Router Class Initialized
INFO - 2025-05-15 15:54:18 --> Output Class Initialized
INFO - 2025-05-15 15:54:18 --> Security Class Initialized
DEBUG - 2025-05-15 15:54:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:54:18 --> Input Class Initialized
INFO - 2025-05-15 15:54:18 --> Language Class Initialized
INFO - 2025-05-15 15:54:18 --> Loader Class Initialized
INFO - 2025-05-15 15:54:18 --> Helper loaded: url_helper
INFO - 2025-05-15 15:54:18 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:54:18 --> Helper loaded: form_helper
INFO - 2025-05-15 15:54:18 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:54:18 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:54:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:54:18 --> Form Validation Class Initialized
INFO - 2025-05-15 15:54:18 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:54:18 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:54:18 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:54:18 --> Controller Class Initialized
INFO - 2025-05-15 15:54:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:54:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:54:18 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:54:18 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:54:18 --> Final output sent to browser
DEBUG - 2025-05-15 15:54:18 --> Total execution time: 0.0347
INFO - 2025-05-15 15:54:19 --> Config Class Initialized
INFO - 2025-05-15 15:54:19 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:54:19 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:54:19 --> Utf8 Class Initialized
INFO - 2025-05-15 15:54:19 --> URI Class Initialized
INFO - 2025-05-15 15:54:19 --> Router Class Initialized
INFO - 2025-05-15 15:54:19 --> Output Class Initialized
INFO - 2025-05-15 15:54:19 --> Security Class Initialized
DEBUG - 2025-05-15 15:54:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:54:19 --> Input Class Initialized
INFO - 2025-05-15 15:54:19 --> Language Class Initialized
INFO - 2025-05-15 15:54:19 --> Loader Class Initialized
INFO - 2025-05-15 15:54:19 --> Helper loaded: url_helper
INFO - 2025-05-15 15:54:19 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:54:19 --> Helper loaded: form_helper
INFO - 2025-05-15 15:54:19 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:54:19 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:54:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:54:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:54:19 --> Form Validation Class Initialized
INFO - 2025-05-15 15:54:19 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:54:19 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:54:19 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:54:19 --> Controller Class Initialized
DEBUG - 2025-05-15 15:54:19 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-31'
AND DATE(t.tanggal) <= '2025-06-30'
ORDER BY "t"."tanggal" DESC
INFO - 2025-05-15 15:55:50 --> Config Class Initialized
INFO - 2025-05-15 15:55:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:50 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:50 --> URI Class Initialized
INFO - 2025-05-15 15:55:50 --> Router Class Initialized
INFO - 2025-05-15 15:55:50 --> Output Class Initialized
INFO - 2025-05-15 15:55:50 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:50 --> Input Class Initialized
INFO - 2025-05-15 15:55:50 --> Language Class Initialized
INFO - 2025-05-15 15:55:50 --> Loader Class Initialized
INFO - 2025-05-15 15:55:50 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:50 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:50 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:50 --> Controller Class Initialized
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:50 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:50 --> Total execution time: 0.0315
INFO - 2025-05-15 15:55:50 --> Config Class Initialized
INFO - 2025-05-15 15:55:50 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:50 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:50 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:50 --> URI Class Initialized
INFO - 2025-05-15 15:55:50 --> Router Class Initialized
INFO - 2025-05-15 15:55:50 --> Output Class Initialized
INFO - 2025-05-15 15:55:50 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:50 --> Input Class Initialized
INFO - 2025-05-15 15:55:50 --> Language Class Initialized
INFO - 2025-05-15 15:55:50 --> Loader Class Initialized
INFO - 2025-05-15 15:55:50 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:50 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:50 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:50 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:50 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:50 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:50 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:50 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:50 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:50 --> Controller Class Initialized
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:50 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:50 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:50 --> Total execution time: 0.0405
INFO - 2025-05-15 15:55:52 --> Config Class Initialized
INFO - 2025-05-15 15:55:52 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:52 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:52 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:52 --> URI Class Initialized
INFO - 2025-05-15 15:55:52 --> Router Class Initialized
INFO - 2025-05-15 15:55:52 --> Output Class Initialized
INFO - 2025-05-15 15:55:52 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:52 --> Input Class Initialized
INFO - 2025-05-15 15:55:52 --> Language Class Initialized
INFO - 2025-05-15 15:55:52 --> Loader Class Initialized
INFO - 2025-05-15 15:55:52 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:52 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:52 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:52 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:52 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:52 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:52 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:52 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:52 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:52 --> Controller Class Initialized
INFO - 2025-05-15 15:55:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:52 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:52 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:52 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:52 --> Total execution time: 0.0161
INFO - 2025-05-15 15:55:53 --> Config Class Initialized
INFO - 2025-05-15 15:55:53 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:53 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:53 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:53 --> URI Class Initialized
INFO - 2025-05-15 15:55:53 --> Router Class Initialized
INFO - 2025-05-15 15:55:53 --> Output Class Initialized
INFO - 2025-05-15 15:55:53 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:53 --> Input Class Initialized
INFO - 2025-05-15 15:55:53 --> Language Class Initialized
INFO - 2025-05-15 15:55:53 --> Loader Class Initialized
INFO - 2025-05-15 15:55:53 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:53 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:53 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:53 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:53 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:53 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:53 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:53 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:53 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:53 --> Controller Class Initialized
INFO - 2025-05-15 15:55:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:54 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:54 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:54 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:54 --> Total execution time: 0.0296
INFO - 2025-05-15 15:55:56 --> Config Class Initialized
INFO - 2025-05-15 15:55:56 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:56 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:56 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:56 --> URI Class Initialized
INFO - 2025-05-15 15:55:56 --> Router Class Initialized
INFO - 2025-05-15 15:55:56 --> Output Class Initialized
INFO - 2025-05-15 15:55:56 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:56 --> Input Class Initialized
INFO - 2025-05-15 15:55:56 --> Language Class Initialized
INFO - 2025-05-15 15:55:56 --> Loader Class Initialized
INFO - 2025-05-15 15:55:56 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:56 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:56 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:56 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:56 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:56 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:56 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:56 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:56 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:56 --> Controller Class Initialized
INFO - 2025-05-15 15:55:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:56 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:56 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:56 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:56 --> Total execution time: 0.0403
INFO - 2025-05-15 15:55:57 --> Config Class Initialized
INFO - 2025-05-15 15:55:57 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:57 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:57 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:57 --> URI Class Initialized
INFO - 2025-05-15 15:55:57 --> Router Class Initialized
INFO - 2025-05-15 15:55:57 --> Output Class Initialized
INFO - 2025-05-15 15:55:57 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:57 --> Input Class Initialized
INFO - 2025-05-15 15:55:57 --> Language Class Initialized
INFO - 2025-05-15 15:55:57 --> Loader Class Initialized
INFO - 2025-05-15 15:55:57 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:57 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:57 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:57 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:57 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:57 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:57 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:57 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:57 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:57 --> Controller Class Initialized
INFO - 2025-05-15 15:55:57 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:57 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:57 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:57 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:57 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:57 --> Total execution time: 0.0094
INFO - 2025-05-15 15:55:59 --> Config Class Initialized
INFO - 2025-05-15 15:55:59 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:55:59 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:55:59 --> Utf8 Class Initialized
INFO - 2025-05-15 15:55:59 --> URI Class Initialized
INFO - 2025-05-15 15:55:59 --> Router Class Initialized
INFO - 2025-05-15 15:55:59 --> Output Class Initialized
INFO - 2025-05-15 15:55:59 --> Security Class Initialized
DEBUG - 2025-05-15 15:55:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:55:59 --> Input Class Initialized
INFO - 2025-05-15 15:55:59 --> Language Class Initialized
INFO - 2025-05-15 15:55:59 --> Loader Class Initialized
INFO - 2025-05-15 15:55:59 --> Helper loaded: url_helper
INFO - 2025-05-15 15:55:59 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:55:59 --> Helper loaded: form_helper
INFO - 2025-05-15 15:55:59 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:55:59 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:55:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:55:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:55:59 --> Form Validation Class Initialized
INFO - 2025-05-15 15:55:59 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:55:59 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:55:59 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:55:59 --> Controller Class Initialized
INFO - 2025-05-15 15:55:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:55:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:55:59 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:55:59 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:55:59 --> Final output sent to browser
DEBUG - 2025-05-15 15:55:59 --> Total execution time: 0.0093
INFO - 2025-05-15 15:56:03 --> Config Class Initialized
INFO - 2025-05-15 15:56:03 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:56:03 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:56:03 --> Utf8 Class Initialized
INFO - 2025-05-15 15:56:03 --> URI Class Initialized
INFO - 2025-05-15 15:56:03 --> Router Class Initialized
INFO - 2025-05-15 15:56:03 --> Output Class Initialized
INFO - 2025-05-15 15:56:03 --> Security Class Initialized
DEBUG - 2025-05-15 15:56:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:56:03 --> Input Class Initialized
INFO - 2025-05-15 15:56:03 --> Language Class Initialized
INFO - 2025-05-15 15:56:03 --> Loader Class Initialized
INFO - 2025-05-15 15:56:03 --> Helper loaded: url_helper
INFO - 2025-05-15 15:56:03 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:56:03 --> Helper loaded: form_helper
INFO - 2025-05-15 15:56:03 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:56:03 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:56:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:56:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:56:03 --> Form Validation Class Initialized
INFO - 2025-05-15 15:56:03 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:56:03 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:56:03 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:56:03 --> Controller Class Initialized
INFO - 2025-05-15 15:56:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/header.php
INFO - 2025-05-15 15:56:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/table_list.php
INFO - 2025-05-15 15:56:03 --> File loaded: /var/www/html/codeigniter/application/views/layout/footer.php
INFO - 2025-05-15 15:56:03 --> File loaded: /var/www/html/codeigniter/application/views/transaksi/index.php
INFO - 2025-05-15 15:56:03 --> Final output sent to browser
DEBUG - 2025-05-15 15:56:03 --> Total execution time: 0.0101
INFO - 2025-05-15 15:56:08 --> Config Class Initialized
INFO - 2025-05-15 15:56:08 --> Hooks Class Initialized
DEBUG - 2025-05-15 15:56:08 --> UTF-8 Support Enabled
INFO - 2025-05-15 15:56:08 --> Utf8 Class Initialized
INFO - 2025-05-15 15:56:08 --> URI Class Initialized
INFO - 2025-05-15 15:56:08 --> Router Class Initialized
INFO - 2025-05-15 15:56:08 --> Output Class Initialized
INFO - 2025-05-15 15:56:08 --> Security Class Initialized
DEBUG - 2025-05-15 15:56:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-15 15:56:08 --> Input Class Initialized
INFO - 2025-05-15 15:56:08 --> Language Class Initialized
INFO - 2025-05-15 15:56:08 --> Loader Class Initialized
INFO - 2025-05-15 15:56:08 --> Helper loaded: url_helper
INFO - 2025-05-15 15:56:08 --> Helper loaded: transaksi_helper
INFO - 2025-05-15 15:56:08 --> Helper loaded: form_helper
INFO - 2025-05-15 15:56:08 --> Helper loaded: custom_form_helper
INFO - 2025-05-15 15:56:08 --> Database Driver Class Initialized
DEBUG - 2025-05-15 15:56:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-15 15:56:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-15 15:56:08 --> Form Validation Class Initialized
INFO - 2025-05-15 15:56:08 --> Model "Transaksi_model" initialized
INFO - 2025-05-15 15:56:08 --> Model "Barang_model" initialized
INFO - 2025-05-15 15:56:08 --> Model "Pembeli_model" initialized
INFO - 2025-05-15 15:56:08 --> Controller Class Initialized
DEBUG - 2025-05-15 15:56:08 --> SELECT "t".*, "p"."nama" AS "nama_pembeli", "dt"."barang_dibeli", "dt"."total_diskon", "dt"."total_setelah_diskon", TO_CHAR(t.tanggal, 'DD FMMonth YYYY - HH24:MI:SS') AS tgl, TO_CHAR(t.tanggal, 'YYYY-MM-DD') AS tgl_iso
FROM "transaksi" "t"
JOIN "pembeli" "p" ON "t"."pembeli_id" = "p"."id"
JOIN (
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt ON "dt"."transaksi_id" = "t"."id_transaksi"
WHERE DATE(t.tanggal) >= '2025-05-01'
AND DATE(t.tanggal) <= '2025-05-15'
ORDER BY "t"."tanggal" DESC
