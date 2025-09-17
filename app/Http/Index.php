<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Hall Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fdfdfd;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    table {
      border-collapse: collapse;
      width: 400px;
      background: #fff;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
      border-radius: 10px;
      overflow: hidden;
    }
    td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }
    td:first-child {
      font-weight: bold;
      width: 35%;
    }
    input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .btn-container {
      text-align: center;
      padding: 12px;
    }
    button {
      padding: 8px 16px;
      margin: 0 5px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }
    .submit-btn {
      background-color: #4CAF50;
      color: white;
    }
    .edit-btn {
      background-color: #ff9800;
      color: white;
    }
  </style>
</head>
<body>
  <form>
    <table>
      <tr>
        <td>Full Name</td>
        <td><input type="text" name="fullname" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" required></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="tel" name="phone" required></td>
      </tr>
      <tr>
        <td>Date</td>
        <td><input type="date" name="date" required></td>
      </tr>
      <tr>
        <td>Guests</td>
        <td><input type="number" name="guests" required></td>
      </tr>
      <tr>
        <td>Hall Preference</td>
        <td><input type="text" name="hall" placeholder="e.g. Grand Hall"></td>
      </tr>
      <tr>
        <td colspan="2" class="btn-container">
          <button type="submit" class="submit-btn">Submit</button>
          <button type="button" class="edit-btn">Edit</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
