<html>
<head>
    <title>oAuth testing</title>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @foreach($client->getBlogPosts('symerizer.tumblr.com')->posts as $post)
                <div class="col-md-12">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->id}}</p>
                    <p>{{$post->reblog_key}}</p>
                    @if(isset($post->body))
                        {!! $post->body !!}
                    @endif
                    <hr/>
                </div>
            @endforeach
            <?php  //$data = array('type'=>'text', 'title'=>'test', 'body' => 'test');
                   //$client->createPost('symerizer.tumblr.com', $data);

                ?>

        </div>
    </div>



</div>
</body>
</html>
