## 指令
### 強制刪除 container
```
    docker rm -f {names || id}
    # 刪除所有 container 
    docker rm $(docker ps -aq)
```

### 刪除 image
```
    docker rmi {REPOSITORY:TAG} 
```



### 從 linux 離開 (使用exit 會讓 linux 關閉)
```
    ctrl + p, ctrl + q
```


