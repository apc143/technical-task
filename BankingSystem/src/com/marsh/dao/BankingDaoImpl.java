package com.marsh.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.marsh.bean.Customer;
import com.marsh.util.DBUtil;

public class BankingDaoImpl implements BankingDao {

	@Override
	public boolean createCustomer(Customer cust) {
		Connection conn = DBUtil.getConnection();
		String query = "insert into customer(name,mobile,accType,balance) values(?,?,?,?)";
		try {
			PreparedStatement stmt = conn.prepareStatement(query);
			stmt.setString(1, cust.getName());
			stmt.setLong(2, cust.getMobile());
			stmt.setString(3, cust.getAccType());
			stmt.setDouble(4, cust.getBalance());
			int rows = stmt.executeUpdate();
			if(rows>0) {
				return true;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return false;
	}

	@Override
	public double getBalance(long accNo) {
		String query = "select balance from customer where accNo=?";
		Connection conn = DBUtil.getConnection();
		try {
			PreparedStatement stmt = conn.prepareStatement(query);
			stmt.setLong(1, accNo);
			ResultSet rs = stmt.executeQuery();
			// rs.next() is mandatory
			if(rs.next()) {
				double balance = rs.getDouble(1);
				return balance;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return -1;
	}


	@Override
	public long getAccNo(long accNo1) {
		String query = "select accNo from customer where accNo=?";
		Connection conn = DBUtil.getConnection();
		try {
			PreparedStatement stmt = conn.prepareStatement(query);
			stmt.setLong(1, accNo1);
			ResultSet rs = stmt.executeQuery();
			// rs.next() is mandatory
			if(rs.next()) {
				long balance = rs.getLong(1);
				return balance;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return -1;
	}

	@Override
	public double setBalance(long acc, double amt) {
		String query = "update customer set balance = balance + ? where accNo=?";
		Connection conn = DBUtil.getConnection();
		try {
			PreparedStatement stmt = conn.prepareStatement(query);
			stmt.setDouble(1, amt);
			stmt.setLong(2, acc);
			stmt.executeUpdate();
		} catch (Exception e) {
				e.printStackTrace();
		}	
		return -1;
	}

	

}
