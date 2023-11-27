<?php
error_reporting(0);
date_default_timezone_set("Asia/Shanghai");
$id = isset($_GET['id']) ? $_GET['id'] : 'cctv1';
$n = [
    'cctv1' => '3221225726', // CCTV1
    'cctv2' => '3221225706', // CCTV2
    'cctv3' => '3221226008', // CCTV3
    'cctv4' => '3221225779', // CCTV4
    'cctv4o' => '3221226268', // CCTV4欧洲
    'cctv4a' => '3221226300', // CCTV4美洲
    'cctv5' => '3221226024', // CCTV5
    'cctv5p' => '3221226171', // CCTV5+
    'cctv6' => '3221226011', // CCTV6
    'cctv7' => '3221225745', // CCTV7
    'cctv8' => '3221226005', // CCTV8
    'cctv9' => '3221226031', // CCTV9
    'cctv10' => '3221225685', // CCTV10
    'cctv11' => '3221225746', // CCTV11
    'cctv12' => '3221225747', // CCTV12
    'cctv13' => '3221225748', // CCTV13
    'cctv14' => '3221225727', // CCTV14
    'cctv15' => '3221225749', // CCTV15
    'cctv16' => '3221226302', // CCTV16
    'cctv17' => '3221226027', // CCTV17
    'sjdl' => '3221226071', // CCTV世界地理
    'bqkj' => '3221226111', // CCTV兵器科技
    'ystq' => '3221226117', // CCTV央视台球
    'nxss' => '3221226104', // CCTV女性时尚
    'hjjc' => '3221226097', // CCTV怀旧剧场
    'whjp' => '3221226100', // CCTV文化精品
    'dszn' => '3221226120', // CCTV电视指南
    'dyjc' => '3221226124', // CCTV第一剧场
    'fyjc' => '3221226107', // CCTV风云剧场
    'fyzq' => '3221226153', // CCTV风云足球
    'fyyy' => '3221226083', // CCTV风云音乐
    'gefwq' => '3221226114', // CCTV高尔夫网球
    'cgtn' => '3221226297', // CGTN
    'cgtnr' => '3221226278', // CGTN俄语
    'cgtnf' => '3221226265', // CGTN法语
    'cgtnjl' => '3221226271', // CGTN纪录
    'cgtne' => '3221226284', // CGTN西语
    'cgtna' => '3221226281', // CGTN阿语
    'zgjt' => '3221226286', // 中国交通
    'cetv1' => '3221225723', // CETV1
    'cetv2' => '3221226332', // CETV2
    'cetv4' => '3221226338', // CETV4
    'dnws' => '3221225739', // 东南卫视
    'dfws' => '3221225752', // 东方卫视
    'bjws' => '3221225754', // 北京卫视
    'jlws' => '3221225753', // 吉林卫视
    'scws' => '3221225757', // 四川卫视
    'tjws' => '3221225756', // 天津卫视
    'ahws' => '3221225716', // 安徽卫视
    'sdws' => '3221225728', // 山东卫视
    'gdws' => '3221225720', // 广东卫视
    'jsws' => '3221225751', // 江苏卫视
    'jxws' => '3221225710', // 江西卫视
    'hnbws' => '3221225713', // 河北卫视
    'henws' => '3221225709', // 河南卫视
    'zjws' => '3221225780', // 浙江卫视
    'szws' => '3221225712', // 深圳卫视
    'hbws' => '3221225708', // 湖北卫视
    'hnws' => '3221225778', // 湖南卫视
    'gsws' => '3221225755', // 甘肃卫视
    'gzws' => '3221225776', // 贵州卫视
    'lnws' => '3221225717', // 辽宁卫视
    'cqws' => '3221225686', // 重庆卫视
    'hljws' => '3221225758', // 黑龙江卫视
    'ynws' => '3221225687', // 云南卫视
    'nmgws' => '3221225718', // 内蒙古卫视
    'nlws' => '3221225696', // 农林卫视
    'nxws' => '3221225719', // 宁夏卫视
    'sxws' => '3221225730', // 山西卫视
    'gxws' => '3221225711', // 广西卫视
    'xjws' => '3221225759', // 新疆卫视
    'hanws' => '3221226298', // 海南卫视
    'xzws' => '3221225668', // 西藏卫视
    'snxws' => '3221225688', // 陕西卫视
    'qhws' => '3221226301', // 青海卫视
    'ssws' => '3221226324', // 三沙卫视
    'xmws' => '3221225761', // 厦门卫视
    'ybws' => '3221225721', // 吉林延边卫视
    'kbws' => '3221225695', // 康巴卫视
    'dwqws' => '3221225738', // 大湾区卫视
    'btws' => '3221225722', // 兵团卫视
    'zyws' => '3221225697', // 西藏藏语卫视
    'adws' => '3221225694', // 青海安多卫视
    'jsrw' => '3221225767', // 上海纪实人文
    'jskj' => '3221226105', // 北京纪实科教
    'klcd' => '3221226190', // 湖南快乐垂钓
    'cha' => '3221226216', // 湖南茶
    'jykt' => '3221225731', // 湖南金鹰卡通
    'jyjs' => '3221225671', // 湖南金鹰纪实
    'ley' => '3221226214', // 乐游
    'dmxc' => '3221226211', // SiTV动漫秀场
    'xsj' => '3221226188', // SiTV新视觉
    'hxjc' => '3221226210', // SiTV欢笑剧场
    'fztd' => '3221226199', // SiTV法治天地
    'yxfy' => '3221226193', // SiTV游戏风云
    'shss' => '3221226207', // SiTV生活时尚
    'dsjc' => '3221226243', // SiTV都市剧场
    'jsxt' => '3221226327', // SiTV金色学堂
    'gz2' => '3221225682', // 贵州2
    'gz3' => '3221225704', // 贵州3
    'gz4' => '3221225740', // 贵州4
    'gz5' => '3221225662', // 贵州5
    'gz6' => '3221225672', // 贵州6
    'gz7' => '3221225741', // 贵州7
    'gy1' => '3221225743', // 贵阳1
    'lps1' => '3221225772', // 六盘水1
    'lps2' => '3221225773', // 六盘水2
    'kl' => '3221226062', // 凯里
    'asgg' => '3221226034', // 安顺公共
    'asxw' => '3221226054', // 安顺新闻综合
    'sn' => '3221226299', // 思南
    'bj1' => '3221226002', // 毕节1
    'bj2' => '3221226021', // 毕节2
    'oa' => '3221226174', // 瓮安
    'zygg' => '3221226028', // 遵义公共
    'zyzh' => '3221226026', // 遵义综合
    'zyds' => '3221226051', // 遵义都市
    'lszh' => '3221225998', // 雷山综合
    'qdxw' => '3221226033', // 黔东南新闻综合
    'qxgg' => '3221226003', // 黔西南公共
    'qxzh' => '3221225995', // 黔西南综合
    'qxxw' => '3221225693', // 黔西新闻
    'lgs' => '3221225677', // 种养新影老故事
    'zxs' => '3221225663', // 种养新影中学生
    'fxzl' => '3221226162', // 种养新影发现之旅
    'kkse' => '3221225732', // 卡酷少儿
    'hhxd' => '3221225689', // 哈哈炫动
    'jkt' => '3221225690', // 广东嘉佳卡通
    'ymkt' => '3221225763', // 江苏优漫卡通
    'qm' => '3221225736', // 重庆汽摩
    'lz' => '3221225680', // 江苏靓装
    'cftx' => '3221226145', // 江苏财富天下
    'sypd' => '3221225683', // 摄影频道
    'gxpd' => '3221225692', // 国学频道
    'hqqg' => '3221225681', // 环球奇观
    'tz' => '3221226095', // 桐梓
    'ydds' => '3221225774', // 贵州移动电视
    'gy2' => '3221225684', // 贵阳2
    'gy3' => '3221225705', // 贵阳3
    'tr1' => '3221225775', // 铜仁1
    'tr2' => '3221226102', // 铜仁2
    'qn1' => '3221226022', // 黔南1
    'qn2' => '3221226025', // 黔南2
    'jshq' => '3221226148', // 聚鲨环球精选
    'tywq' => '3221226341', // 天元围棋
    'zqjy' => '3221226304', // cetv早期教育
    'tlds' => '3221226098', // 铁路电视
    'ctds' => '3221226101', // 成铁电视
];
$ipArray = [
    '39.136.17.114',
    '39.136.17.115',
    '39.136.17.116',
    '39.136.17.117',
    '39.136.17.118',
    '39.136.17.119',
];

$ip = $ipArray[array_rand($ipArray)];
$cacheFileName = 'gzyd_cache_all.json'; // Cache file name for all URLs
$cacheDuration = 43200; // Cache duration in seconds (12 hours)

// Initialize an empty array to store cached URLs
$cachedUrls = [];

// Check if the cache file exists and isn't expired
if (file_exists($cacheFileName)) {
    // Read the cached URLs from the file
    $cachedUrls = json_decode(file_get_contents($cacheFileName), true);

    // Check and remove expired cached URLs
    foreach ($cachedUrls as $cachedId => $cachedData) {
        $timestampDiff = time() - $cachedData['timestamp'];
        if ($timestampDiff >= $cacheDuration) {
            // Remove expired cached URL
            unset($cachedUrls[$cachedId]);
        }
    }
}

// Check if the URL for the current 'id' is already cached and within the duration
if (isset($cachedUrls[$id]) && time() - $cachedUrls[$id]['timestamp'] < $cacheDuration) {
    // Use cached URL for the current 'id'
    $finalUrl = $cachedUrls[$id]['url'];
} else {
    $playurl = "http://{$ip}/cdnrrs.gz.chinamobile.com/PLTV/88888888/224/{$n[$id]}/1/index.m3u8?fmt=ts2hls";

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $playurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout in seconds

    // Execute cURL session and capture the final URL
    curl_exec($ch);

    // Get the final URL after following redirects
    $finalUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    // Get the HTTP status code
    $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL session
    curl_close($ch);

    if ($httpStatusCode !== 403) {
        // Cache the final URL for the current 'id'
        $cachedUrls[$id] = [
            'url' => $finalUrl,
            'timestamp' => time()
        ];

        // Store all cached URLs in the cache file
        file_put_contents($cacheFileName, json_encode($cachedUrls));
    } else {
        // Use the default URL or handle the 403 case as needed
        $finalUrl = 'https://angtv.cc';
    }
}

header("Content-Type: application/vnd.apple.mpegurl");
header('Location: ' . $finalUrl);
exit;