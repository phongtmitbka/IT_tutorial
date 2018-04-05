import axios from 'axios'

export default class API {
    get(url, params = {}) {
        return new Promise((resolve, reject) => {
            axios
                .get(url, {
                    params: params
                })
                .then(function (response) {
                    resolve(response.data);
                })
                .catch(function (error) {
                    reject(error);
                });
        });
    }

    put(url, data = {}) {
        return new Promise((resolve, reject) => {
            axios
                .put(url, data)
                .then(function (response) {
                    resolve(response.data);
                })
                .catch(function (error) {
                    reject(error);
                });
        });
    }

    post(url, data = {}) {
        return new Promise((resolve, reject) => {
            axios
                .post(url, data)
                .then(function (response) {
                    resolve(response.data);
                })
                .catch(function (error) {
                    reject(error);
                });
        });
    }

    del(url, params = {}) {
        return new Promise((resolve, reject) => {
            axios
                .delete(url, { params: params } )
                .then(function (response) {
                    resolve(response.data);
                })
                .catch(function (error) {
                    reject(error);
                });
        });
    }

    _responseHandler(resolve, res) {
        return resolve(res.body.data);
    }

    _errorHandler(reject, err) {
        app.$broadcast('EVENT_COMMON_ERROR', err);
        return reject(err);
    }

}
