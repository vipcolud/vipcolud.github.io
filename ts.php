$urls = array(
    'https://www.belongapp.fun/2018/06/26/多线程/',
    'https://www.belongapp.fun/2018/03/08/SpringBoot系列-集成Thymeleaf构建Web应用/',
    'https://www.belongapp.fun/2018/02/20/数据库死锁原因及解决办法/',
);
$api = 'http://data.zz.baidu.com/urls?site=www.belongapp.fun&token=9dr6bdWIswXbDlM1';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;