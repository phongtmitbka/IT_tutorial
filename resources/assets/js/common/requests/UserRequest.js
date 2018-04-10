import BaseRequest from '../lib/BaseRequest';

export default class UserRequest extends BaseRequest
{
    getCurrentUser() {
        let url = '/current-user';
        return this.get(url);
    }
}