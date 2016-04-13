## Linux 相關操作

#### 背景執行程式

    ##### 例 . 用 nodejs 執行 index.js
    預設會輸出文件至 nohup.out
    ```
    nohup node index &
    ```

    ##### 查看內容 
    ```
    tail -f nohup.out
    ```

    ##### 列出目前背景執行的程序
    ```
        jobs
    ```

    ##### 將背景執行的程序 pop 至前台
    ```
        fg %1  
        # or 
        fg {pid}
    ```
