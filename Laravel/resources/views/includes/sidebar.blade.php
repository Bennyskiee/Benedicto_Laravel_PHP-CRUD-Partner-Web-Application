
<div class="logo">

                    <a href="javascript:;" class="simple-text">
                    <img src={{ asset('pic/logo.png')}} alt='logo' width="120" height="120"> 
                    </a>
                    
                    <body style="background-color:powderblue;">
              
                </div>
                <ul class="nav">
                   
                    <li>
                        <a class="nav-link" href="{{ route('client.index') }}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Client</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link active"  href="{{ route('vehicles.index') }}">
                            <i class="nc-icon nc-bus-front-12"></i>
                            <p>Vehicle</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('payments.index') }}">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Payment</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('rents.index') }}">
                            <i class="nc-icon nc-delivery-fast"></i>
                            <p>Rented Vehicle</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('requirements.index') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Requirements</p>
                        </a>
                    </li>
                
                </ul>
</body>