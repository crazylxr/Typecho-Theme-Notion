L2Dwidget.init({
    "model": {
        jsonPath: "https://unpkg.com/live2d-widget-model-hijiki@1.0.5/assets/hijiki.model.json",
        "scale": 1
    },
    "display": {
        "position": "right",
        "width": 100,
        "height": 200,
        "hOffset": 50,
        "vOffset": -80
    },
    "mobile": {
        "show": true,
        "scale": 0.5
    },
    "react": {
        "opacityDefault": 0.7,
        "opacityOnHover": 0.2
    }
});

// 自动生成文章目录
new katelog({
    contentEl: 'articleBody',
    catelogEl: 'catelogList',
    linkClass: 'k-catelog-link',
    linkActiveClass: 'k-catelog-link-active',
    supplyTop: 20,
    active: function (el) {
        // console.log(el);
    }
});