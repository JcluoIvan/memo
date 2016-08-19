

- head > meta 的 viewport width=device-width 似乎會影響到部分手機瀏覽器的 stroke-dasharray 及 stroke-dashoffset 的值

- IOS Device 的 media-query 
```
iPhone < 5:
@media screen and (device-aspect-ratio: 2/3) {}

iPhone 5:
@media screen and (device-aspect-ratio: 40/71) {}

iPhone 6:
@media screen and (device-aspect-ratio: 375/667) {}

iPhone 6 Plus:
@media screen and (device-aspect-ratio: 16/9) {}

iPad:
@media screen and (device-aspect-ratio: 3/4) {}

```