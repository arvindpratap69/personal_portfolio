@component('mail::message')
# Thank You, {{ $contact->name }}!

We appreciate you reaching out to us. Our team will review your message and get back to you as soon as possible.

---

**Your Message:**  
{{ $contact->message }}

Thank you for your time!  
**[Your Company Name]**

@endcomponent
