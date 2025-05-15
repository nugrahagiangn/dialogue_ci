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
