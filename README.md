# 介绍

[![Build Status](https://travis-ci.com/ChiVincent/opencc4php.svg?branch=master)](https://travis-ci.org/ChiVincent/opencc4php)

opencc4php 是[OpenCC](https://github.com/BYVoid/OpenCC)的 PHP extension，能夠完成簡體與繁體文字之間的互換。 

支持 PHP 版本： 7.0 - 7.3

### 轉換效果：

`你干什么不干我事` => `你幹什麼不干我事`

地區辭彙轉換效果：
`我鼠标哪儿去了` => `我滑鼠哪兒去了`

# 安裝

#### Linux | OS X

你需要先安装 `1.0.1` 版本以上的 OpenCC，安装 OpenCC：
```
git clone https://github.com/BYVoid/OpenCC.git --depth 1
cd OpenCC
make
sudo make install
```
安装 opencc4php：
```
git clone git@github.com:NauxLiu/opencc4php.git --depth 1
cd opencc4php
phpize
./configure
make && sudo make install
```
>如果你的 OpenCC 安装目录不在 `/usr` 或 `/usr/local` ，可在 `./configure` 时添加 `--with-opencc=[DIR]` 指定你的 OpenCC 目录


#### Windows
[Windows 安装说明](https://github.com/NauxLiu/opencc4php/pull/16)

# 使用

### 範例：
```php
$od = opencc_open("s2twp.json"); // 傳入設定檔名
$text = opencc_convert("我鼠标哪儿去了。", $od);
echo $text;
opencc_close($od);
```
输出:
`我滑鼠哪兒去了`

### 函數列表：

`opencc_open(string ConfigName)`  ConfigName: 設定檔名。成功 return `opencc_od_resource`，失敗 return `false`
`opencc_close(resource ob)` 關閉 resource。成功 return `true`，失敗 return `false`  
`opencc_error()` 返回最后一条错误信息，有错误信息返回String,无错误返回false 
`opencc_convert(string str, resource od)` str: 要轉換的字串（UTF-8）、od: `opencc_od_resource`


### 可用設定檔
* `s2t.json` Simplified Chinese to Traditional Chinese 簡體到繁體
* `t2s.json` Traditional Chinese to Simplified Chinese 繁體到簡體
* `s2tw.json` Simplified Chinese to Traditional Chinese (Taiwan Standard) 簡體到臺灣正體
* `tw2s.json` Traditional Chinese (Taiwan Standard) to Simplified Chinese 臺灣正體到簡體
* `s2hk.json` Simplified Chinese to Traditional Chinese (Hong Kong Standard) 簡體到香港繁體（香港小學學習字詞表標準）
* `hk2s.json` Traditional Chinese (Hong Kong Standard) to Simplified Chinese 香港繁體（香港小學學習字詞表標準）到簡體
* `s2twp.json` Simplified Chinese to Traditional Chinese (Taiwan Standard) with Taiwanese idiom 簡體到繁體（臺灣正體標準）並轉換爲臺灣常用詞彙
* `tw2sp.json` Traditional Chinese (Taiwan Standard) to Simplified Chinese with Mainland Chinese idiom 繁體（臺灣正體標準）到簡體並轉換爲中國大陸常用詞彙
* `t2tw.json` Traditional Chinese (OpenCC Standard) to Taiwan Standard 繁體（OpenCC 標準）到臺灣正體
* `t2hk.json` Traditional Chinese (OpenCC Standard) to Hong Kong Standard 繁體（OpenCC 標準）到香港繁體（香港小學學習字詞表標準）


# 貢獻列表
[@刘相轩](https://github.com/NauxLiu)  
[@Kyle Tse](https://github.com/shtse8)  
[@Alliumcepa Triplef](https://github.com/fffonion)  
[@acgrid](https://github.com/acgrid)  
[@pkujhd](https://github.com/pkujhd)  
[@bc](https://github.com/bclow)  
[@chivincent](https://github.com/ChiVincent)
