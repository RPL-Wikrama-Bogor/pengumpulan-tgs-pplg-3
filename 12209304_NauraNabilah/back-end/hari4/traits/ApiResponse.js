const { use } = require("../routes/book")

const responseNotFound = (res) => {
    res.status(404).json({
        success: false,
        message: 'Not Found'
    })
}

const responseSuccess = (res, result, message) => {
    res.status(200).json ({
        success: true,
        message: message,
        data: result
    })
}

//berfungsi jika validasi gagal
const responseFailValidate = (res, message) => {
    return res.status(400).json({
        success: false,
        message: message
    })
}

const responseAuthSuccess = (res, token, message, user) => {
    return res.status(200).json({
        success: true, 
        token: token,
        message: message,
        user: user
    })
}

module.exports = {
    responseNotFound,
    responseSuccess,
    responseFailValidate,
    responseAuthSuccess
}