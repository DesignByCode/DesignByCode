export function generateRandomPassword(length: number, options: { useUppercase: boolean, useNumbers: boolean, useSpecialChars: boolean }): string {
    // Define character sets
    const lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    const uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const numberChars = '0123456789';
    const specialChars = '!@#$%^&*()-_+=';

    // Create the character set for password generation
    let charset = lowercaseChars;

    if (options.useUppercase) {
        charset += uppercaseChars;
    }

    if (options.useNumbers) {
        charset += numberChars;
    }

    if (options.useSpecialChars) {
        charset += specialChars;
    }

    // Generate the random password
    let password = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        password += charset[randomIndex];
    }

    return password;
}

// Example usage
export const passwordLength = 16;
export const passwordOptions = {
    useUppercase: true,
    useNumbers: true,
    useSpecialChars: true,
};

const passwordGeneratorInput = document.getElementById("password-generator")
const generatePasswordButton: HTMLElement | null = document.getElementById("generatePasswordButton")
const copyPasswordButton = document.getElementById("copy-password")

if (passwordGeneratorInput && generatePasswordButton) {
    let password: string = ""

    function updateDisabled() {
        (copyPasswordButton as HTMLButtonElement)!.disabled = !(passwordGeneratorInput as HTMLInputElement).value.length;
    }

    generatePasswordButton.addEventListener('click', function () {
        password = generateRandomPassword(passwordLength, passwordOptions);
        (passwordGeneratorInput as HTMLInputElement).value = password
        updateDisabled()
    })

    passwordGeneratorInput.addEventListener('input', () => {
        updateDisabled()
    })
    passwordGeneratorInput.addEventListener('change', () => {
        updateDisabled()
    })

    copyPasswordButton!.addEventListener('click', function () {
        navigator.clipboard.writeText(password).then(() => {
            const originalText = this.innerHTML
            this.innerHTML = '👍 Copied!'
            setTimeout(() => {
                this.innerHTML = originalText
            }, 1000)
        })
    });
}
