package com.marsh.util;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBUtil {
	private static Connection conn;
	public static Connection getConnection() {
		String url="jdbc:mysql://localhost/marsh";
		String user = "root";
		String password = "root";
		if(conn==null) {
			try {
				Class.forName("com.mysql.jdbc.Driver");
				conn = DriverManager.getConnection(url, user, password);
			} catch (ClassNotFoundException e) {
				e.printStackTrace();
			} catch (SQLException e) {
				e.printStackTrace();
			}
		}
		return conn;
	}
	public void closeConnection() {
		if(conn!=null) {
			try {conn.close();} catch (SQLException e) {}
		}
	}

}
