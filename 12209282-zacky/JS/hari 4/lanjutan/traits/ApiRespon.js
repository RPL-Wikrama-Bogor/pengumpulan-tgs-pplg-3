const { user } = require("../config/database")

const responseNotFound = (res) => {
    return res.status(404).json({
        success: false,
        message: 'Not Found'
    })
}

const responseSuccess = (res, result, message) => {
    return res.status(200).json({
        success: true,
        message: message,
        data: result
    })
}

const responFailValidate = (res, message) => {
    return res.status(400).json({
        success: false,
        message: message
    })
}

const responAuthsuccess = (res, token, message, user) => {
    return res.status(500).json({
        success: true,
        token: token,
        message: message,
        user: user
    })
}

module.exports = {
    responseNotFound,
    responseSuccess,
    responAuthsuccess,
    responFailValidate
}