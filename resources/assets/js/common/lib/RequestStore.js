import LessonRequest from '../requests/LessonRequest';
import CourseRequest from '../requests/CourseRequest';
import UserRequest from '../requests/UserRequest';

const requestMap = {
  LessonRequest,
  CourseRequest,
  UserRequest,
}

const instances = {};

export default class RequestStore {

    static getRequest(classname) {
        let RequestClass = requestMap[classname];
        if (!RequestClass) {
            throw new Error('Invalid request class name: ' + classname);
        }

        let requestInstance = instances[classname];
        if (!requestInstance) {
            requestInstance = new RequestClass();
            instances[classname] = requestInstance;
        }

        return requestInstance;
    }

}