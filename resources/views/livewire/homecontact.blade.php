<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <p>Feel free to reach out to us for any inquiries or to schedule a demo.</p>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Street, City, State, Country</li>
                    <li><i class="fas fa-phone"></i> +123-456-7890</li>
                    <li><i class="fas fa-envelope"></i> contact@example.com</li>
                </ul>
                <form action="" method="POST">
                    {{-- @csrf --}}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12236.82664683202!2d6.973495570404724!3d4.8698053294507035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d1bf8f1bdfe7%3A0xc60033794358672c!2sMyteacher%20Institute!5e1!3m2!1sen!2sng!4v1734735245070!5m2!1sen!2sng" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
