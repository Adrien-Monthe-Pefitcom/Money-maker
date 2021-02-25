$(function () {

    /**
     * @desc Function to validate user input 
     * @param object element
     * @return void
     */


    function removeSymbols(string) {

        string = string.replace(/[^\w\s]/gi, '')
        string = string.split('_').join('')
        return string
    }

    function removeNumbers(string) {

        string = string.replace(/[0-9]/g, '')
        return string
    }

    function getOnlyNumbers(string) {

        string = string.replace(/\D/g, "")
        return string
    }

    function getOnlyEmail(string) {

        string = string.replace(/[&\/\\#,+()$~%'`^/":*?<>{}]/g, '')
        return string
    }

    function removeExtraSpaces(string) {

        if (string.length > 0) {

            string = string.replace(/\s+/g, ' ').trim()
        }
        return string
    }

    function removeAllSpaces(string) {

        string = string.split(' ').join('')
        return string
    }

    function validateInputField(input) {

        input.not('.except').bind('keyup change keypress focus keydown', function (event) {

            let elm = $(this)
            let value = elm.val()
            let type = elm.attr('type')
            let length = value.length
            let max = elm.attr('data-max')

            // validate numbers
            if (type == 'number') {

                value = getOnlyNumbers(value)
            }

            // remove all symbols if not an email
            if (type != 'email') {
                value = removeSymbols(value)
            }

            // validate email
            if (type == 'email') {

                value = getOnlyEmail(value)
                value = removeAllSpaces(value)

            }

            // validate names 
            if (elm.hasClass('name') && type == 'text') {

                value = removeNumbers(value)
                value = removeSymbols(value)
            }
            else if ((type == 'text' && !elm.hasClass('name')) || elm.hasClass('mixed')) {
                value = removeSymbols(value)
            }
            else {
                // remove extra spaces from input
                value = removeExtraSpaces(value)
            }

            // remove all spaces 
            if (elm.hasClass('nospace')) {

                value = removeAllSpaces(value)
            }

            // validate names 
            if (elm.hasClass('mixed')) {

                value = removeSymbols(value)
            }

            // capitalize value
            if (elm.hasClass('uppercase')) {

                value = value.toUpperCase()
            }

            // check for max length
            if (typeof max !== typeof undefined && max !== false) {

                if (length > max) {
                    value = value.substr(0, max)
                }
            }

            input.val(value)

        })

        // remove extra spaces from name when focused out 
        input.not('.except').bind('focusout', function (e) {

            if ($(this).attr('type') == 'text') {

                if ($(this).hasClass('name') || $(this).hasClass('mixed')) {

                    $(this).val(removeExtraSpaces($(this).val()))
                }
            }
        })
    }

    $('body').find('input, text').each(function (index, value) {

        validateInputField($(this))
    })


    /**
     * @desc Function to prevent content dragging
     * @return void
     */
    $('img, h1, h2, h3, h4, h5, h6, p').on('dragstart', function (event) { event.preventDefault() })

    /**
     * @desc Function to prevent drag and drop text
     * @return void
     */
    $('input, textarea').bind('dragstart dragenter drag dragover', function (event) {
        event.preventDefault()
    })

    $('form').submit(function (event) {

        $(this).find('button').replaceWith(`
        
        <center> 
            <button class="btn btn-primary btn-block btn-lg bg" type="button" disabled="">
                <span class="spinner-border spinner-border-sm mr-05" role="status" aria-hidden="true"></span>
                Please wait...
            </button>
        </center>
        
        `)
        $(this).find('input').each(function () {
            if ($(this).attr('type') != 'hidden') {
                //$(this).attr('disabled', true).addClass('disabled')
            }
        })
    })
})

class Swipe {

    constructor(element) {

        this.xDown = null
        this.yDown = null
        this.element = typeof(element) === 'string' ? document.querySelector(element) : element

        this.element.addEventListener('touchstart', function(evt) {
            this.xDown = evt.touches[0].clientX
            this.yDown = evt.touches[0].clientY
        }.bind(this), false)

    }

    onLeft(callback) {
        this.onLeft = callback

        return this
    }

    onRight(callback) {
        this.onRight = callback

        return this
    }

    onUp(callback) {
        this.onUp = callback

        return this
    }

    onDown(callback) {
        this.onDown = callback

        return this
    }

    handleTouchMove(evt) {
        if ( ! this.xDown || ! this.yDown ) {
            return
        }

        var xUp = evt.touches[0].clientX
        var yUp = evt.touches[0].clientY

        this.xDiff = this.xDown - xUp
        this.yDiff = this.yDown - yUp

        if ( Math.abs( this.xDiff ) > Math.abs( this.yDiff ) ) { // Most significant.
            if ( this.xDiff > 0 ) {
                this.onLeft()
            } else {
                this.onRight()
            }
        } else {
            if ( this.yDiff > 0 ) {
                this.onUp()
            } else {
                this.onDown()
            }
        }

        // Reset values.
        this.xDown = null
        this.yDown = null
    }

    run() {
 
        this.element.addEventListener('touchmove', function(evt) {
            try {
                this.handleTouchMove(evt).bind(this)
            } catch (error) {
                
            }
        }.bind(this), false) 
    }
}


$(function () {
  
    const swiper = new Swipe('body')
    const url = 'd'//window.location.href
    swiper.onLeft(function() { 

        if(url.indexOf('dashboard') > -1){
            window.location = '/card'
        }
        if(url.indexOf('card') > -1){
            window.location = '/transactions'
        }
        if(url.indexOf('transactions') > -1){
            window.location = '/account'
        }
    })

    swiper.onRight(function() { 

        if(url.indexOf('account') > -1){
            window.location = '/transactions'
        }
        if(url.indexOf('transactions') > -1){
            window.location = '/card'
        }
        if(url.indexOf('card') > -1){
            window.location = '/dashboard'
        }
    })

    swiper.run()
})