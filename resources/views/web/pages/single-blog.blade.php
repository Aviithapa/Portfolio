@extends('web.layouts.app')



@section('content')
    <!--/ Intro Skew Star /-->
    <div class="intro intro-single route bg-image" style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Blog Details</h2>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

    <!--/ Section Blog-Single Star /-->
    @foreach($blog as $blog)
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="{{$blog->getNewsImage()}}" class="img-fluid" alt="">
                        </div>
                        <div class="post-meta">
                            <h1 class="article-title">{{$blog->title}}</h1>
                            <ul>
                                <li>
                                    <span class="ion-ios-person"></span>
                                    <a href="#">{{$user->name}}</a>
                                </li>
                                <li>
                                    <span class="ion-pricetag"></span>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <span class="ion-chatbox"></span>
                                    <a href="#">14</a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <p>
                                {{$blog->content}}
                            </p>
                            <blockquote class="blockquote">
                                <p class="mb-0">{{$blog->excerpt}}</p>
                            </blockquote>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-comments">
                        <div class="title-box-2">
                            <h3 class="title-left">
                                Leave a Reply
                            </h3>
                        </div>
                        <form class="form-mf">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                    <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message"
                              cols="45" rows="8" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-sidebar">
                        <h5 class="sidebar-title">Recent Post</h5>
                        <div class="sidebar-content">
                            <ul class="list-sidebar">
                                <li>
                                    <a href="#">Atque placeat maiores.</a>
                                </li>
                                <li>
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                </li>
                                <li>
                                    <a href="#">Nam quo autem exercitationem.</a>
                                </li>
                                <li>
                                    <a href="#">Atque placeat maiores nam quo autem</a>
                                </li>
                                <li>
                                    <a href="#">Nam quo autem exercitationem.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-sidebar widget-tags">
                        <h5 class="sidebar-title">Tags</h5>
                        <div class="sidebar-content">
                            <ul>
                                <li>
                                    <a href="#">Web.</a>
                                </li>
                                <li>
                                    <a href="#">Design.</a>
                                </li>
                                <li>
                                    <a href="#">Travel.</a>
                                </li>
                                <li>
                                    <a href="#">Photoshop</a>
                                </li>
                                <li>
                                    <a href="#">Corel Draw</a>
                                </li>
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
