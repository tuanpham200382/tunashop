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
define( 'DB_NAME', 'tunashop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'tuan200382' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`Q:vVQ[;hTZ<:<2KotQ-=JXd?j9z P&$}MJ)%1Oo{DX{9l/#e)@n4)~,l.(;  EU' );
define( 'SECURE_AUTH_KEY',  'H;qT=vA^+N!)7qTm`^]8;*Bt*wwd+xsR&9cK(E!^_;vfdsNEG(tqM%-PG }dw8OI' );
define( 'LOGGED_IN_KEY',    'aY?0vFH,cc<BAWVV$4:R(m_s?;,K^-1^=tdxg9l#Pce*4B$R)L7PkC.#0^7-!aw<' );
define( 'NONCE_KEY',        'L6N_. &f{!j|XV$C^.`n=>|DHKezLaRL`Eu$3_0FymOBv;,kU(~ukw6$*GL>nQ7{' );
define( 'AUTH_SALT',        '/nhOQ|,r&%vC?Q=e^a0l#cOn[bBrSg8{,PDmX4zSfzn&4O-m72imVYD82Qg`uyy7' );
define( 'SECURE_AUTH_SALT', '}cjBs@Z)U|gNLr]U]|r`QD5$uXC-lh{H!.T(OVkG1n8*]osa(N5g2wCBCE@U`<3e' );
define( 'LOGGED_IN_SALT',   ']T*?+80?vlnFh1-u_%w0@0c330[ki0GH!hOp vuZ%kpMeH+4hoAD482TT ?>e${L' );
define( 'NONCE_SALT',       '^4fzIm8nf,Bg<kI2?Ylj5;>pzx#GH( )}2:K0vY@1f4hu7*tLhwhJnW~aX|AcXPF' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
