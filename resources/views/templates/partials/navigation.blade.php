<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="{{URL::asset('/img/logo.jpg')}}" alt="profile Pic" height="70" width="100">
            </a>
        </div>
        <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if (Auth::check())
                    <li><a href="#">Daily Prices</a></li>
                     <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="#">Marketplace</a></li>
                    @else
                      <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="#">Marketplace</a></li>
                    @endif            
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     @if (Auth::check())
                     <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li class="dropdown-header">Messaging</li>
                              <li><a href="#">Your Conversations <span class="badge">20</span></a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">Marketplace</li>
                              <li><a href="#">Orders <span class="badge">42</span></a></li>
                              <li><a href="#">Posts <span class="badge">9</span></a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">SMS</li>
                              <li><a href="#">Inbox <span class="badge">2</span></a></li>
                              <li><a href="#">Outbox <span class="badge">7</span></a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Settings</a></li>
                              <li><a href="{{ route('auth.signout')}}">Logout</a></li>
                            </ul>
                          </li>
                       
                        
                    @endif
                </ul>
                @if (Auth::check())
                @else

            <ul class="nav navbar-nav navbar-right">
                <form id="signin" class="navbar-form navbar-right" role="form" method="post" action="{{ route('auth.signin')}}">
                        <div class="input-group{{ $errors->has('l_email') ? ' has-error' : ''}}">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="l_email" type="email" class="form-control" name="l_email" value="" placeholder="Email Address">                                        
                        </div>

                        <div class="input-group{{ $errors->has('l_password') ? ' has-error' : ''}}">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="l_password" type="password" class="form-control" name="l_password" value="" placeholder="Password">                                        
                        </div>
                         <div class="input-group">
                             <input type="checkbox" name="remember" > Remember Me!
                         </div>
                        <input type="submit" name="login" value="Login" class="btn btn-success">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                   </form>
            </ul>
            @endif
        </div>
    </div>
</nav>
