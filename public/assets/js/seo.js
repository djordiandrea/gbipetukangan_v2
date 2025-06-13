document.addEventListener("DOMContentLoaded", function () {
    const script = document.createElement("script");
    script.type = "application/ld+json";
    script.text = JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "GBI Petukangan",
        "url": "https://gbipetukangan.com/",
        "sameAs": ["https://www.instagram.com/gbihouseofhappiness/"]
    });
    document.head.appendChild(script);
});