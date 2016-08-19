#### 寫 es6 語法時，發生
```
@foo
class App extends React.Component {
    ...
}
```
的 `@foo` 被標示 error，在專案根目錄新增 `jsconfig.json`檔，內容加上
```
{
    "compilerOptions": {
        "emitDecoratorMetadata": true,
        "experimentalDecorators": true,
        "module": "amd",
        "target": "ES6"
    }
}
```
即可解決


## 常用快速鍵
```
    * MBL, MBM, MBR:  Mouse Button Left, Middle, Right

    alt + MB1           // 多點選取
    alt + up/down       // 整行移動
    shift + alt + f     // 格式化
    shift + alt + MBL   // 多行選取
    shift + alt + a     // 注解
    ctrl + k + [num]    // 第 n 層縮排摺疊
    ctrl + k + [        // 選取的區塊摺疊
    ctrl + k + ]        // 選取的區塊展開
    ctrl + space        // auto complete





```