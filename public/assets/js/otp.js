document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('otp-form')
    const inputsOTP = [...form.querySelectorAll('input[type=text]')]
    const submitOTP = document.getElementById('submitVerify') //If you wish to add the submit button in future, Enable the submit.focus() events below
    
    const handleKeyDown = (e) => {
        if (
            !/^[0-9]{1}$/.test(e.key)
            && e.key !== 'Backspace'
            && e.key !== 'Delete'
            && e.key !== 'Tab'
            && !e.metaKey
        ) {
            e.preventDefault()
        }

        if (e.key === 'Delete' || e.key === 'Backspace') {
            const index = inputsOTP.indexOf(e.target);
            
            if(index == inputsOTP.length - 1){
                inputsOTP[index].value = '';
                inputsOTP[index].focus();
                $(e.target).removeClass('active');
                inputsOTP[index - 1].focus();
            }else if (index > 0) {
                inputsOTP[index].value = '';
                $(e.target).removeClass('active');
                inputsOTP[index - 1].focus();
            }
        }
    }

    const handleInput = (e) => {
        const { target } = e
        const index = inputsOTP.indexOf(target);
        

        if(target.value.trim() !== ''){
            $(target).addClass('active');
        }else{
            $(target).removeClass('active');
        }

        if (target.value) {
            if (index < inputsOTP.length - 1) {
                inputsOTP[index + 1].focus()
            }else{
                submitOTP.focus()
            }
        }
    }

    const handleFocus = (e) => {
        e.target.select()
    }

    const handlePaste = (e) => {
        e.preventDefault()
        const text = e.clipboardData.getData('text')
        if (!new RegExp(`^[0-9]{${inputsOTP.length}}$`).test(text)) {
            return
        }
        const digits = text.split('')
        inputsOTP.forEach((input, index) => input.value = digits[index])
        submitOTP.focus()
    }

    inputsOTP.forEach((input) => {
        input.addEventListener('input', handleInput)
        input.addEventListener('keydown', handleKeyDown)
        input.addEventListener('focus', handleFocus)
        input.addEventListener('paste', handlePaste)
    })
})  

