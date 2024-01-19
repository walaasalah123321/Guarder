<section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="{{asset('images/contact-bg.jpg')}}" alt="">
      </div>
    </div>
    <div class="container"  >
      <div class="heading_container heading_center">
        <h2>
         {{__("message.title")}}
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="#">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="{{__("message.name")}}" />
                  </div>
                  <div>
                    <input type="email" placeholder="{{__("message.email")}} " />
                  </div>
                  <div>
                    <input type="text" placeholder="{{__("message.phone")}}" />
                  </div>
                  <div class="">
                    <input type="text" placeholder="{{__("message.message")}}" class="message_input" />
                  </div>
                  <div class="btn-box ">
                    <button type="submit">
                      {{__("message.send")}}
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
