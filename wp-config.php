<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) php-team@yaochufa <php-team@yaochufa.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/wordpressBlog/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wordpress');

/* MySQL数据库用户名 */
define('DB_USER', 'root');

/* MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/* MySQL主机 */
define('DB_HOST', '127.0.0.1');

/* 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/* 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/JBe]}/LH~#1Ujtx((^d&q -/0B(s*Tus7pJyN}5YsZwo9YqHo^Y4V)~S!rh0mSJ');
define('SECURE_AUTH_KEY', 'J$NDgkj[Kb?q#Png5K)d-D?H#aj[}Egq#e(Gyf$bNm)pvzS=}Z3x#t6w^EU_zs>o');
define('LOGGED_IN_KEY', 'u#Zc@arYEZZ>_%~~@Qeg;w2~14/.R4E=a5=~_@x|Tl78jwu}]D|>kJYTSjF/i zR');
define('NONCE_KEY', 'Ud7txrlqn]TH8V}T}9O^;u$6tsnUL-~KcJUmm/yM%w,.pmN*Wq6 phf8c}Et>)je');
define('AUTH_SALT', 'i&pk];<vBYZDxouJXuc<n<bhZYv jT3WTf-W>doeCEl~-Tj_C5@gLU7E)`j7X<iG');
define('SECURE_AUTH_SALT', 'RC~qs;*qAI4iL5x!>6Sdhz-]6bTvvO%Dd~Ip0ib@,!!X{+WZY2M,#! ![S~NzN:)');
define('LOGGED_IN_SALT', '^Blyd*`a9`xE[08ckB>i6yuHgkhg`*iS[q,=NS [)Y{h^~];7G]Q>TDdK7z*|-3r');
define('NONCE_SALT', 'i(dK7,j>HP/5dUs3 ?3LFTn(m[)ls$`Bx4DzA7@Ss{oCCHjRc!`om&wa@Hqaun1]');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/*
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/*
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/* WordPress目录的绝对路径。 */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** 设置WordPress变量和包含文件。 */
require_once ABSPATH . 'wp-settings.php';
