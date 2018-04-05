import BaseRequest from './BaseRequest';

export default class ApiRequest extends BaseRequest
{
    sendRequest(url, method, params = {})
    {
        url = '/api' + url;
        switch (method) {
            case 'POST': return this.post(url, params); break;
            case 'PUT': return this.put(url, params); break;
            case 'DEL': return this.del(url, params); break;
            default: return this.get(url, params); break;
        }
    }
}