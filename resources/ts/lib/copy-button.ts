document.addEventListener("DOMContentLoaded", function() {
  const preElements = document.querySelectorAll("pre[class^='language-']");

  preElements.forEach(function(preElement) {
    const wrapperDiv = document.createElement("div");
    wrapperDiv.classList.add("relative");

    // Check if preElement has a parent node before attempting to insert wrapperDiv
    if (preElement.parentNode) {
      preElement.parentNode.insertBefore(wrapperDiv, preElement);
      wrapperDiv.appendChild(preElement);

      const copyButton = document.createElement("button");
      copyButton.classList.add("copy-button");
      copyButton.textContent = "Copy";
      wrapperDiv.appendChild(copyButton);

      copyButton.addEventListener("click", function() {
        const codeText = preElement.querySelector("code")?.textContent?.trim(); // Use optional chaining
        if (codeText) {
          navigator.clipboard.writeText(codeText).then(function() {
            const originalText = copyButton.textContent;
            copyButton.textContent = "👍 Copied!";
            setTimeout(function() {
              copyButton.textContent = originalText;
            }, 2000);
          }).catch(function(error) {
            console.error("Copy failed:", error);
          });
        }
      });
    }
  });
});


// const languageClass = preElement.className.match(/language-(\w+)/);
// if (languageClass && languageClass[1]) {
//     const languageHeader = document.createElement("div");
//     languageHeader.classList.add("language-header");
//     languageHeader.textContent = languageClass[1];
//     wrapperDiv.prepend(languageHeader);
// }
