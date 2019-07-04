<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'xeoto');

/** Username của database */
define('DB_USER', 'xeoto');

/** Mật khẩu của database */
define('DB_PASSWORD', '123456');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=zv2%n(<`gtzzucSP:Oq:xCy^A<KmwK97/#<mQR3S_]248iKEqkb{:DM;vb}YN0~');
define('SECURE_AUTH_KEY',  ':<1zG,K+yZ7=_@ =ZkIQ_/uXt6sNTEy]EW>UCHKl:a=1YE8W|%3Lo*nR}R!,#`5N');
define('LOGGED_IN_KEY',    '41*aEE5-lqvPo4~-Hb|PHI{eu0B`yJmMb2fRY&R&tKt*u_y+&(S`~-V<LS3(h5-~');
define('NONCE_KEY',        'HD) ]:6H6!g>]JZN9?N1$tTaW*kKV!sR:lZ?]LRMf6.C*bOWF5?<v=OV?3c~<,$k');
define('AUTH_SALT',        'K#CM_r45R7jsE*T^%SS1S1Bw=sCO_6Q#+f@MQ=V#&s,}Yl_zs4)MkfIk1s$9)G*V');
define('SECURE_AUTH_SALT', 'SuC7p$6FoR+7QCO C|^#17]v{wr|fduqp<iB[VR:dM,4@ex5cd<*Sb4q{3G&bk9#');
define('LOGGED_IN_SALT',   'CCqsi5=k+z<N$%V;IYyV42Q$6:AIV#at)#]D-5CZjA}7LjsmViyM!322R|G1yD&z');
define('NONCE_SALT',       'z4qGsvd`/o8S<Fx103LTK=a{8/(7+i+9]y_BT7|qKgC(i@SZkW1y-Z00 QF0mW0w');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
