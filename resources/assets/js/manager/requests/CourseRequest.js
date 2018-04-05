import BaseRequest from "../../common/lib/BaseRequest";

export default class CourseRequest extends BaseRequest
{
  getCourses(params) {
    let url = '/api/courses';
    return this.get(url, params);
  }
  getCourse(params) {
    let url = '/api/course';
    return this.get(url, params);
  }
  updateCourse(params) {
    let url = '/api/course';
    return this.post(url, params);
  }
}