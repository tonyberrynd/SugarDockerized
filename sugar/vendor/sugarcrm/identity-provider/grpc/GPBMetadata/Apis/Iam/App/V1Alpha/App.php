<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/app/v1alpha/app.proto

namespace GPBMetadata\Apis\Iam\App\V1Alpha;

class App
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Apis\Iam\Jwks::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9c120a1e617069732f69616d2f6170702f7631616c7068612f6170702e" .
            "70726f746f121d737567617263726d2e617069732e69616d2e6170702e76" .
            "31616c7068611a13617069732f69616d2f6a776b732e70726f746f22560a" .
            "1343726561746557656241707052657175657374120e0a0674656e616e74" .
            "180120012809122f0a0361707018022001280b32222e737567617263726d" .
            "2e617069732e69616d2e6170702e7631616c7068612e417070225c0a1943" .
            "7265617465557365724167656e7441707052657175657374120e0a067465" .
            "6e616e74180120012809122f0a0361707018022001280b32222e73756761" .
            "7263726d2e617069732e69616d2e6170702e7631616c7068612e41707022" .
            "590a164372656174654e617469766541707052657175657374120e0a0674" .
            "656e616e74180120012809122f0a0361707018022001280b32222e737567" .
            "617263726d2e617069732e69616d2e6170702e7631616c7068612e417070" .
            "22660a1343726561746543726d41707052657175657374120e0a0674656e" .
            "616e74180120012809122f0a0361707018022001280b32222e7375676172" .
            "63726d2e617069732e69616d2e6170702e7631616c7068612e417070120e" .
            "0a06726567696f6e18032001280922770a1443726561746543726d417070" .
            "526573706f6e7365122f0a0361707018012001280b32222e737567617263" .
            "726d2e617069732e69616d2e6170702e7631616c7068612e417070122e0a" .
            "046a776b7318022001280b32202e737567617263726d2e617069732e6961" .
            "6d2e4a534f4e5765624b6579536574221d0a0d4765744170705265717565" .
            "7374120c0a046e616d6518012001280922430a1055706461746541707052" .
            "657175657374122f0a0361707018012001280b32222e737567617263726d" .
            "2e617069732e69616d2e6170702e7631616c7068612e41707022200a1044" .
            "656c65746541707052657175657374120c0a046e616d6518012001280922" .
            "580a0f4c6973744170707352657175657374120e0a0674656e616e741801" .
            "20012809120e0a0666696c74657218022001280912110a09706167655f73" .
            "697a6518032001280512120a0a706167655f746f6b656e18042001280922" .
            "5d0a104c69737441707073526573706f6e736512300a0461707073180120" .
            "03280b32222e737567617263726d2e617069732e69616d2e6170702e7631" .
            "616c7068612e41707012170a0f6e6578745f706167655f746f6b656e1802" .
            "2001280922270a17526567656e6572617465536563726574526571756573" .
            "74120c0a046e616d6518012001280922310a18526567656e657261746553" .
            "6563726574526573706f6e736512150a0d636c69656e745f736563726574" .
            "18012001280922a4020a0341707012110a09636c69656e745f6964180120" .
            "01280912150a0d636c69656e745f73656372657418022001280912130a0b" .
            "636c69656e745f6e616d6518032001280912150a0d72656469726563745f" .
            "7572697318042003280912130a0b6772616e745f74797065731805200328" .
            "0912160a0e726573706f6e73655f7479706573180620032809120e0a0673" .
            "636f70657318072003280912100a08636f6e746163747318082003280912" .
            "100a086c6f676f5f75726918092001280912120a0a636c69656e745f7572" .
            "69180a2001280912120a0a706f6c6963795f757269180b20012809120f0a" .
            "07746f735f757269180c2001280912180a106170706c69636174696f6e5f" .
            "74797065180d2001280912130a0b636c69656e745f74797065180e200128" .
            "0932ce070a0641707041504912680a0c4372656174655765624170701232" .
            "2e737567617263726d2e617069732e69616d2e6170702e7631616c706861" .
            "2e437265617465576562417070526571756573741a222e73756761726372" .
            "6d2e617069732e69616d2e6170702e7631616c7068612e41707022001274" .
            "0a12437265617465557365724167656e7441707012382e73756761726372" .
            "6d2e617069732e69616d2e6170702e7631616c7068612e43726561746555" .
            "7365724167656e74417070526571756573741a222e737567617263726d2e" .
            "617069732e69616d2e6170702e7631616c7068612e4170702200126e0a0f" .
            "4372656174654e617469766541707012352e737567617263726d2e617069" .
            "732e69616d2e6170702e7631616c7068612e4372656174654e6174697665" .
            "417070526571756573741a222e737567617263726d2e617069732e69616d" .
            "2e6170702e7631616c7068612e417070220012790a0c4372656174654372" .
            "6d41707012322e737567617263726d2e617069732e69616d2e6170702e76" .
            "31616c7068612e43726561746543726d417070526571756573741a332e73" .
            "7567617263726d2e617069732e69616d2e6170702e7631616c7068612e43" .
            "726561746543726d417070526573706f6e73652200125c0a064765744170" .
            "70122c2e737567617263726d2e617069732e69616d2e6170702e7631616c" .
            "7068612e476574417070526571756573741a222e737567617263726d2e61" .
            "7069732e69616d2e6170702e7631616c7068612e417070220012620a0955" .
            "7064617465417070122f2e737567617263726d2e617069732e69616d2e61" .
            "70702e7631616c7068612e557064617465417070526571756573741a222e" .
            "737567617263726d2e617069732e69616d2e6170702e7631616c7068612e" .
            "417070220012560a0944656c657465417070122f2e737567617263726d2e" .
            "617069732e69616d2e6170702e7631616c7068612e44656c657465417070" .
            "526571756573741a162e676f6f676c652e70726f746f6275662e456d7074" .
            "792200126d0a084c69737441707073122e2e737567617263726d2e617069" .
            "732e69616d2e6170702e7631616c7068612e4c6973744170707352657175" .
            "6573741a2f2e737567617263726d2e617069732e69616d2e6170702e7631" .
            "616c7068612e4c69737441707073526573706f6e7365220012700a105265" .
            "67656e657261746553656372657412362e737567617263726d2e61706973" .
            "2e69616d2e6170702e7631616c7068612e526567656e6572617465536563" .
            "726574526571756573741a222e737567617263726d2e617069732e69616d" .
            "2e6170702e7631616c7068612e417070220042395a376769746875622e63" .
            "6f6d2f737567617263726d2f6d756c746976657273652f617069732f6961" .
            "6d2f6170702f7631616c7068613b617070620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
