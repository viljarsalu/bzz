@extends('layouts.default')

@section('headerBlock')
<div class="jumbotron gray">
        <div class="container">
          <section>
            <img src="images/world-map-contacts.png" class="img-responsive" alt="Contacts us at one of our global offices"/>
            <div class="title-block">
              <h2 class="blue-text">Contact us<br />
                at one of our<br />
                global offices
              </h2>
            </div>
          </section>
        </div>
    </div>
@stop

@section('content')
<div class="container">
        <section>
          <aside class="floating-block right mail-block">
            <strong>
              <script language="javascript">
                <!--
                var nic="info";
                var at="@";
                var dom="bizzipartners.com"
                document.write("<a href=mailto:"+nic+at+dom+" class='gray-dark plain-text'>"+nic+at+dom+"</a>");
                --> </script>
            </strong>
          </aside>
          <div class="contacts-list">
            <!-- HEADQUARTERS CONTACTS -->
            <div class="item">
              <div class="thumbnail">
                <p class="area">HEADQUARTERS</p>
                <div class="caption">
                  <h3>Milan, Italy</h3>
                  <p>
                    Bizzi & Partners Development S.p.A.<br/>
                    Viale Italia, 572<br/>
                    20099 Sesto San Giovanni - MI<br/>
                    T +39 02 45472900<br/>
                    F +39 02 45472930<br/>
                    <a target="_blank" href="https://www.google.ee/maps/place/Viale+Italia,+572,+20099+Sesto+San+Giovanni+MI,+Itaalia/@45.5251055,9.2479049,15z/data=!4m2!3m1!1s0x4786b885f3f6b37f:0xd3ddd815136c8f94?hl=et" class="link-box">see location</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="contacts-list">
            <!-- LONDON CONTACTS -->
            <div class="item">
              <div class="thumbnail">
                <p class="area">western europe</p>
                <div class="caption">
                  <h3>London, UK</h3>
                  <p>
                    Bizzi & Partners Development<br/>
                    12345 London<br/>
                    123 Street Name<br/>
                    T +123 456 789 012<br/>
                    F +123 456 789 012<br/>
                    <a href="!see location" class="link-box">see location</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- NORTH AMERICA CONTACTS -->
            <div class="item">
              <div class="thumbnail">
                <p class="area">NORTH AMERICA</p>
                <div class="caption">
                  <h3>New York, USA</h3>
                    Bizzi & Partners Development LLC<br/>
                    55 East 59th Street, 24th floor<br/>
                    New York, NY 10022<br/>
                    T +1 212.616.0400<br/>
                    F +1 212.616.040<br/>
                    <a href="!see location" class="link-box">see location</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- EASTERN EUROPE CONTACTS -->
            <div class="item">
              <div class="thumbnail">
                <p class="area">EASTERN EUROPE</p>
                <div class="caption">
                  <h3>Tallinn, Estonia</h3>
                  Bizzi & Partners Development<br/>
                  Kohtu 2-28<br/>
                  10130 Tallinn<br/>
                  T +372 646 1190<br/>
                  F +372 646 1192<br/>
                  <a href="!see location" class="link-box">see location</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- SOUTH AMERICA CONTACTS -->
            <div class="item">
              <div class="thumbnail">
                <p class="area">SOUTH AMERICA</p>
                <div class="caption">
                  <h3>Tallinn, Estonia</h3>
                  Bizzi & Partners Development<br/>
                  Avenida Paulista, 925<br/>
                  14 andar conjunto 142<br/>
                  01311-100 São Paulo<br/>
                  T/F +55 11 32630989<br/>
                  <a href="!see location" class="link-box">see location</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@stop