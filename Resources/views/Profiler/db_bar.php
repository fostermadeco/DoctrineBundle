<img style="margin: 0 5px 0 10px; vertical-align: middle; height: 24px" width="24" height="24" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAASxJREFUeNrsV00KhCAYzaGDzLZbONcIghadoDZtiqJNbVq0Ctq06xjNCTrDnKMfGoVpsFBRqNz4QD7NR77vmZ8E1nU1VOJhKIYWoAUoF2CSAwBAf9E6L3JAHn1ADrquu6Qo2LYNWAJ2DizLYjiOg8lnO9HTnKAKwGjbFl7hhOu6/G9gnud/9DzvFieYAjDquoa3noJpmqhRuQDf99+8l5RlCWV40gKKouBuhSyPKWAcR2qMooibWZZlUIYn7UAcx0KZifKkHcjznJpZGIa7BVk8Fl/YgSAIoEhGLJ6wA4iQ3H0Md9dxVVXpUcCxDcPwQRHg9utLzR+TMmmqUCVMyIpIwrKs5/ac7IvOc7dgQ9M0KUvApZXwCHQ7YieSk9fcvQ/oHxMtQAtQLeArwABN1BHcHlpLnQAAAABJRU5ErkJggg==" />
<span style="color: <?php echo $data->getQueryCount() < 10 ? '#000' : '#d22' ?>"><?php echo $data->getQueryCount() ?></span><span style="margin: 0; padding: 0; color: #aaa">|</span><?php echo sprintf('%0.2f', $data->getTime()) ?> ms
