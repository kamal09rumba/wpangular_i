<div ng-controller="HomeCtrl">
    <div ng-repeat="post in posts">
        <h1>{{post.post_title}}</h1>
        <p>{{post.post_content}}</p>
    </div>
</div>