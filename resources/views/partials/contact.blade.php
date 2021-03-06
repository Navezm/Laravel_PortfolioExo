<!-- ======= Contact Section ======= -->
<div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row" id="contact_box">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">{{$info[0]->title}}</h2>

              <ul class="contact-details">
                <li><span>{{$info[0]->address1}}</span></li>
                <li><span>{{$info[0]->address2}}</span></li>
                <li><span>{{$info[0]->address3}}</span></li>
                <li><span>{{$info[0]->address4}}</span></li>
              </ul>

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="{{$form[0]->placeholder}}" data-rule="minlen:4" data-msg="{{$form[0]->datamessage}}" />
                    <div class="validate"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{$form[1]->placeholder}}" data-rule="email" data-msg="{{$form[1]->datamessage}}" />
                    <div class="validate"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="{{$form[2]->placeholder}}" data-rule="minlen:4" data-msg="{{$form[2]->datamessage}}" />
                    <div class="validate"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="{{$form[3]->datamessage}}" placeholder="{{$form[3]->placeholder}}"></textarea>
                    <div class="validate"></div>
                  </div>
                </div>

                <div class="col-lg-12 mb-3">
                  <div class="loading">{{$loading[0]->p1}}</div>
                  <div class="error-message"></div>
                  <div class="sent-message">{{$loading[0]->p2}}</div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                </div>

            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div><!-- End Contact Section -->