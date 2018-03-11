import BaseRequest from '../lib/BaseRequest';

export default class ApiRequest extends BaseRequest
{
    sendRequest(url, method, params = {})
    {
        url = '/api' + url;
        switch (method) {
            case 'POST': return this.post(url, params);
            case 'PUT': return this.put(url, params);
            case 'DEL': return this.del(url, params);
            default: return this.get(url, params);
        }
    }
}