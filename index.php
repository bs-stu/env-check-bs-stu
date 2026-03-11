<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML 標籤說明書</title>
    <style>
        body { font-family: "Microsoft JhengHei", sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f0f2f5; }
        
        /* 結構化區塊樣式 */
        header { background: #333333; color: white; padding: 1rem; text-align: center; }
        nav { background: #444; color: white; padding: 0.5rem; text-align: center; }
        nav a { color: rgb(250, 250, 250); margin: 0 10px; text-decoration: none; }
        
        .container { display: flex; max-width: 1000px; margin: 20px auto; gap: 20px; }
        
        main { flex: 3; }
        aside { flex: 1; background: #ddd; padding: 15px; border-radius: 8px; }
        
        section { background: white; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        article { border-left: 5px solid #007bff; padding-left: 15px; margin-bottom: 15px; }
        
        footer { background: #333; color: white; text-align: center; padding: 10px; position: relative; bottom: 0; width: 100%; }

        
        .highlight { background-color:   yellow; font-weight: bold; } /* 用於 span */
        .box { border: 2px dashed #f06; padding: 10px; margin: 10px 0; } /* 用於 div */
    </style>
</head>
<body>

    <header>
        <h1>我的程式開發筆記</h1>
        <p>學習 HTML 語意化標籤的基礎</p>
    </header>

    <nav>
        <a href="#">首頁</a>
        <a href="#">關於我</a>
        <a href="#">聯絡我們</a>
    </nav>

</body>
</html>