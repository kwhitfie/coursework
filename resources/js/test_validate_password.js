/*global expect, validate_pass */

describe('Password Checker', function() {
it('returns an empty error list for a valid password',function(){
  var errors = validate_pass("Password1");
  expect(errors).to.have.length(0);
});
it('returns an error list containing "Too short" for passwords shorter than 6 characters',function(){
  var errors = validate_pass("Pass1");
  expect(errors).to.contain("Too short");
});
it('returns an error list containing "Only alphanumeric chars allowed" for passwords containing non-alphanumeric characters',function(){
  var errors = validate_pass("Password!");
  expect(errors).to.contain("Only alphanumeric chars allowed");
});
it('returns an error list containing all errors if multiple errors are present',function(){
  var errors = validate_pass("P1!");
  expect(errors).to.contain("Too short");
  expect(errors).to.contain("Only alphanumeric chars allowed");
});
it('returns an error list containting "must contain at least one number, one lower case letter and one upper case letter"',function(){
  var errors = validate_pass("password1");
  expect(errors).to.contain("Requires at least 1 upper case letter, 1 lower case letter and 1 number.");
});
})
