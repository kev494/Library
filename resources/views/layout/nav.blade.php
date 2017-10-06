<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="tablist">
            <div class="navbar-header">
                <a class="navbar-brand" href="books">Kevin's Library</a>
            </div>
            <ul class="nav navbar-nav">
                <li role="presentation" class="{{Request::is('books') ? 'active' : ''}}"><a href="{{url('books')}}" role="tab">Books</a>
                </li>
                <li role="presentation" class="{{Request::is('authors') ? 'active' : ''}}"><a href="{{url('/authors')}}"
                                                                                              role="tab">Authors</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>