# Overview

This repository contains two example files that illustrate common web security vulnerabilities, with a focus on Stored Cross-Site Scripting (XSS) attacks. The goal of this project is purely educational: to show how web applications can be vulnerable to such attacks and to stress the importance of robust security practices in web development.

  - `index.php` - A PHP script designed to collect and log cookies from incoming HTTP requests.
  - `cookieStealer.svg` - An SVG file with embedded ECMAScript that captures and sends cookies to a specified server.

## Description
### index.php (optional file)

This PHP script demonstrates a server-side vulnerability where user input (cookies) are logged without proper validation or sanitization. This can be exploited in a stored XSS scenario, where malicious scripts are stored on the server and executed by other users.

### cookieStealer.svg

An SVG file that uses embedded ECMAScript to capture and send cookies to a remote server. This demonstrates a client-side aspect of stored XSS, where the script persistently resides in the SVG file and is activated whenever the file is accessed.

### Security Warnings and Stored XSS Vulnerability

  - Stored XSS Exploitation: Both files illustrate a stored XSS vulnerability, where malicious scripts are stored and later executed. This type of attack is particularly dangerous as it can affect multiple users and persist over time.

  - Cookie Logging and Stealing: The techniques shown are serious security risks, commonly used in XSS attacks for unauthorized data capture and session hijacking.

  - Input Validation and Sanitization: The absence of input validation and sanitization in the PHP script makes it a prime target for exploiting XSS vulnerabilities.
    

### To use: 

1. Start a simple php server with index.php in the webroot. 
- `sudo php -S 0.0.0.0:<port>`
- Note: Using the `index.php` file is completely optional, as long as you have a listener setup you should still recieve the cookies. 
2. Modify the IP & Port in the `svg` file to contain your ip & port.
3. Upload the `.svg` file to your vulnerable web app.
4. Profit.


### Ethical Considerations

This project is intended strictly for educational purposes. The techniques demonstrated here should not be used to capture or log data without explicit consent from the users. Misusing these techniques can lead to ethical breaches and legal repercussions.
Contributing

Contributions to this project should focus on enhancing educational value, improving security practices, and ensuring ethical use of code. If you have suggestions or improvements, please open an issue or submit a pull request.
License

This project is released under MIT License. By using or contributing to this project, you agree to adhere to its terms.
