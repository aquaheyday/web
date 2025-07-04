<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <title>추천 위젯 테스트</title>
  <style>
    /* 위젯 전용 기본 스타일 */
    #recommendation-widget ul { list-style: none; padding: 0; }
    #recommendation-widget li { display: flex; align-items: center; margin-bottom: 1rem; }
    #recommendation-widget img { width: 80px; height: 80px; object-fit: cover; margin-right: 1rem; }
    #recommendation-widget .info { display: flex; flex-direction: column; }
    #recommendation-widget .name { font-weight: bold; margin-bottom: .5rem; }
    #recommendation-widget .price { color: #e60000; margin-right: .5rem; }
    #recommendation-widget .old-price { text-decoration: line-through; color: #999; }
    #recommendation-widget .meta { font-size: .9rem; color: #555; }
  </style>
</head>
<body>
  <h1>추천 상품 위젯</h1>
  <!-- 페이지 아무데나 -->
  <div id="recommendation-widget"
       data-api-url="https://recommender.xyzentry.com/v1/recommendations"
       data-tracking-key="3d9cf27d-84a7-4389-b572-54af70acb9d7"
       data-anon-id="f39bc1c1-46af-4847-917e-ab68c56127f4"
       data-lang="en"
       data-top-k="10">
  </div>

  <script src="https://cdn.xyzentry.com/recommendation-widget-test.js"></script>

</body>
</html>
