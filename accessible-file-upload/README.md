# 🌐 Accessible HTML File Upload – Best Practices Demo

This project demonstrates accessible file upload patterns in **vanilla HTML, CSS, and JavaScript** based on WCAG 2.1 and ARIA guidelines.

It showcases common accessibility issues in traditional file uploads and provides inclusive, screen-reader-friendly alternatives using semantic HTML and ARIA attributes.

---

## ✅ What's Included

This demo covers five key accessibility improvements:

### 1. **Proper Labeling**
Uses `<label>` and `aria-describedby` to clearly define file input purpose and helper instructions.

### 2. **Screen Reader Compatibility**
Accessible `<input type="file">` paired with screen-reader-only labels and contextual guidance.

### 3. **Drag-and-Drop with Fallback**
Includes a visually rich drop zone *and* a keyboard/screen-reader-accessible fallback input field.

### 4. **Upload Feedback with ARIA Live Regions**
Uses `aria-live="polite"` to announce upload progress and completion to assistive tech users.

### 5. **Fully Accessible Combined Example**
Applies all best practices in one seamless form.

---

## 📁 Project Structure

```
accessible-file-upload/
├── index.html        # Main demo page
├── README.md         # You’re here!
```

No external dependencies. Just open `index.html` in your browser.

---

## 🚀 Getting Started

1. Clone the repository:

`git clone https://github.com/shamalja/file-upload-demos.git`

`cd file-upload-demos/accessible-file-upload`

2.	Open index.html in any modern browser or with Live Server in VS Code. Learn how to [use a local HTTP server to test your web apps locally](https://webdevhub.dev/how-to-use-local-http-server-test-web-apps/).

---

## 🧪 Accessibility Testing Suggestions

- **Keyboard Navigation:** Tab through each upload field
- **Screen Reader Testing:**
  - Windows: Use NVDA or JAWS
  - Mac: Use VoiceOver (Cmd + F5)
- **Lighthouse Audit:** Run in Chrome DevTools > Lighthouse > Accessibility
- **WAVE Tool:** https://wave.webaim.org/

---

## 📚 Learn More

- [WCAG 2.1 Guidelines](https://www.w3.org/TR/WCAG21/)
- [ARIA Authoring Practices Guide](https://www.w3.org/WAI/ARIA/apg/)
- [Inclusive Components by Heydon Pickering](https://inclusive-components.design/)
- [Filestack Accessibility](https://blog.filestack.com/filestack-v3-29-0-accessible-experience-wcag-2-0-compliant/)

---

## 💡 Author

**Created by:** [Shamal Jayawardhana](https://www.linkedin.com/in/shamal-jayawardhana/)

**Inspired by the blog article:**

Accessibility in HTML File Upload: Best Practices for Inclusive Design

---

## 📝 License

This project is licensed under the [MIT License](https://github.com/shamalja/file-upload-demos/blob/main/LICENSE) — free to use, modify, and share.



